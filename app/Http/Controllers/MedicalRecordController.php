<?php

namespace App\Http\Controllers;

use App\Models\MedicalRecord;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MedicalRecordController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'candidate_id' => 'required',
            'medical_center' => 'required',
            'notes' => 'nullable|string'
        ]);

        MedicalRecord::create([
            'candidate_id' => $request->candidate_id,
            'medical_center' => $request->medical_center,
            'notes' => $request->notes,
            'status' => 'Pending',
        ]);

        return redirect()->back()->with('success', 'Medical record added successfully');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'status' => 'required',
            'notes' => 'nullable|string'
        ]);

        $medicalRecord = MedicalRecord::findOrFail($id);
        $medicalRecord->update($request->all());

        return redirect()->back()->with('success', 'Medical record updated successfully');
    }

    public function destroy($id)
    {
        $medicalRecord = MedicalRecord::findOrFail($id);
        $medicalRecord->delete();

        return redirect()->back()->with('success', 'Medical record deleted successfully');
    }
}
