<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Candidate;
use Illuminate\Http\Request;
use App\Models\ExpenseRecord;

class HomeController extends Controller
{
    public function index() {
        $query = ExpenseRecord::where('candidate_id', 0);
        $expenses = $query->get();

        $totalAmount = $expenses->sum('amount');

        // Group expenses by date and sum them
        $expenseChartData = $expenses->groupBy(function ($item) {
            return Carbon::parse($item->created_at)->format('Y-m-d');
        })->map(function ($day) {
            return $day->sum('amount');
        });

        $candidates = Candidate::count();
        $candidatesmale = Candidate::where('gender', 'male')->count();
        $candidatesfemale = Candidate::where('gender', '!=', 'male')->count();

        return view('home.index', compact(
            'totalAmount',
            'candidates',
            'candidatesmale',
            'candidatesfemale',
            'expenseChartData'
        ));
    }
    public function heelo(){
        return 100;
    }
}
