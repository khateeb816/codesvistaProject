<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Navttc;
use Illuminate\Http\Request;

class NavttcController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'candidate_id' => 'required|integer',
            'center_name' => 'required|string',
            'course' => 'required|string',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date',
            'notes' => 'nullable|string',
            'occupation_name_arabic' => 'nullable|string',
            'occupation_name_english' => 'nullable|string',
            'occupation_code' => 'nullable|string',
            'test_center_city' => 'nullable|string',
            'test_date' => 'nullable|date',
            'expected_result_date' => 'nullable|date',
            'result_status' => 'required|string'
        ]);

        Navttc::create($request->all());

        return redirect()->back()->with('success', 'NAVTTC record added successfully');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'candidate_id' => 'required|integer',
            'center_name' => 'required|string',
            'course' => 'required|string',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date',
            'notes' => 'nullable|string',
            'occupation_name_arabic' => 'nullable|string',
            'occupation_name_english' => 'nullable|string',
            'occupation_code' => 'nullable|string',
            'test_center_city' => 'nullable|string',
            'test_date' => 'nullable|date',
            'expected_result_date' => 'nullable|date',
            'result_status' => 'nullable|string'
        ]);

        $navttc = Navttc::findOrFail($id);
        $navttc->update($request->all());

        return redirect()->back()->with('success', 'NAVTTC record updated successfully');
    }

    public function destroy($id)
    {
        $navttc = Navttc::findOrFail($id);
        $navttc->delete();

        return redirect()->back()->with('success', 'NAVTTC record deleted successfully');
    }
}
