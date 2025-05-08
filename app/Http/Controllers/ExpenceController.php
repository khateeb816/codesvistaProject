<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ExpenseRecord;
use Illuminate\Http\Request;

class ExpenceController extends Controller
{
    public function index(Request $request)
    {
        $query = ExpenseRecord::where('candidate_id', 0);
        
        $filterType = $request->input('filter_type', 'all');
        $year = $request->input('year', date('Y'));
        $month = $request->input('month', date('m'));
        $week = $request->input('week', date('W'));
        
        // Apply filters based on selection
        if ($filterType === 'yearly') {
            $query->whereYear('date', $year);
        } elseif ($filterType === 'monthly') {
            $query->whereYear('date', $year)
                  ->whereMonth('date', $month);
        } elseif ($filterType === 'weekly') {
            // For weekly filter, we need to calculate the start and end dates of the week
            $dateTime = new \DateTime();
            $dateTime->setISODate($year, $week);
            $startDate = $dateTime->format('Y-m-d');
            $dateTime->modify('+6 days');
            $endDate = $dateTime->format('Y-m-d');
            
            $query->whereBetween('date', [$startDate, $endDate]);
        }
        
        $expenses = $query->get();
        
        // Calculate total amount
        $totalAmount = $expenses->sum('amount');
        
        return view('expence.index', compact('expenses', 'filterType', 'year', 'month', 'week', 'totalAmount'));
    }

    public function create()
    {
        return view('expence.add');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'amount' => 'required|numeric',
            'date' => 'required|date',
            'expense_type' => 'required',
            'payment_method' => 'required',
            'description' => 'nullable',
        ]);

        ExpenseRecord::create([
            'amount' => $validatedData['amount'],
            'date' => $validatedData['date'],
            'expense_type' => $validatedData['expense_type'],
            'payment_method' => $validatedData['payment_method'],
            'description' => $validatedData['description'],
            'candidate_id' => 0,
        ]);

        return redirect()->route('expenses')->with('success', 'Expense record created successfully.');
    }

    public function edit($id)
    {
        $expense = ExpenseRecord::findOrFail($id);
        return view('expence.edit', compact('expense'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'amount' => 'required|numeric',
            'date' => 'required|date',
            'expense_type' => 'required',
            'payment_method' => 'required',
            'description' => 'nullable',
        ]);

        $expense = ExpenseRecord::findOrFail($id);
        $expense->update([
            'amount' => $validatedData['amount'],
            'date' => $validatedData['date'],
            'expense_type' => $validatedData['expense_type'],
            'payment_method' => $validatedData['payment_method'],
            'description' => $validatedData['description'],
            'candidate_id' => 0,
        ]);

        return redirect()->route('expenses')->with('success', 'Expense record updated successfully.');
    }

    public function destroy($id)
    {
        $expense = ExpenseRecord::findOrFail($id);
        $expense->delete();

        return redirect()->route('expenses')->with('success', 'Expense record deleted successfully.');
    }
}
