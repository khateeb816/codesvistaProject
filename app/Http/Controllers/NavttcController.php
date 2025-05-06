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
            'candidate_id' => 'required',
            'center_name' => 'required',
            'course' => 'required',
            'status' => 'required|in:Pending,Completed,Failed',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date',
            'notes' => 'nullable|string'
        ]);

        Navttc::create($request->all());

        return redirect()->back()->with('success', 'NAVTTC record added successfully');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:Pending,Completed,Failed',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date',
            'notes' => 'nullable|string'
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
