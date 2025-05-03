<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\PaymentAgent;
use Illuminate\Http\Request;

class PaymentAgentController extends Controller
{
    public function index()
    {
        $paymentAgents = PaymentAgent::all();
        return view('paymentAgents.index' , compact('paymentAgents'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'location' => 'required',
            'passport_no' => 'required',
            'cnic' => 'required',
            'primary_phone' => 'nullable',
            'secondary_phone' => 'nullable',
            'primary_email' => 'nullable',
            'secondary_email' => 'nullable',
            'file_path' => 'nullable',
        ]);
        $fileName = null;
        if ($request->hasFile('file_path')) {
            $file = $request->file('file_path');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('storage'), $fileName);
            $request->merge(['file_path' => $fileName]);
        }
        PaymentAgent::create([
            'name' => $request->name,
            'location' => $request->location,
            'passport_no' => $request->passport_no,
            'cnic' => $request->cnic,
            'primary_phone' => $request->primary_phone,
            'secondary_phone' => $request->secondary_phone,
            'primary_email' => $request->primary_email,
            'secondary_email' => $request->secondary_email,
            'file_path' => $fileName,
        ]);

        return redirect()->route('paymentAgents');
    }

    public function edit($id)
    {
        $paymentAgent = PaymentAgent::findOrFail($id);
        return view('paymentAgents.edit' , compact('paymentAgent'));
    }

    public function update(Request $request , $id)
    {
        $paymentAgent = PaymentAgent::findOrFail($id);
        $fileName = $paymentAgent->file_path;
        if ($request->hasFile('file_path')) {
            $file = $request->file('file_path');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('storage'), $fileName);
            $request->merge(['file_path' => $fileName]);
        }
        $paymentAgent->update([
            'name' => $request->name,
            'location' => $request->location,
            'passport_no' => $request->passport_no,
            'cnic' => $request->cnic,
            'primary_phone' => $request->primary_phone,
            'secondary_phone' => $request->secondary_phone,
            'primary_email' => $request->primary_email,
            'secondary_email' => $request->secondary_email,
            'file_path' => $fileName,
        ]);
        return redirect()->route('paymentAgents');
    }

    public function destroy($id)
    {
        $paymentAgent = PaymentAgent::findOrFail($id);
        $paymentAgent->delete();
        return redirect()->route('paymentAgents');
    }
}
