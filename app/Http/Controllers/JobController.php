<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\JobCandidate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JobController extends Controller
{
    public function store(Request $request)
    {

        $request->validate([
            'candidate_id' => 'required',
            'title' => 'required',
            'company' => 'required',
            'location' => 'required'
        ]);

        $job = JobCandidate::create([
            'candidate_id' => $request->candidate_id,
            'title' => $request->title,
            'company' => $request->company,
            'location' => $request->location,
            'status' => 'Applied',
        ]);

        return redirect()->back()->with('success', 'Job application submitted successfully');
    }
    public function update(Request $request, $id)
    {
        // Validate the request
        $request->validate([
            'status' => 'required',
        ]);

        // Find the job
        $job = JobCandidate::findOrFail($id);
        
        // Update only the status field
        $job->update([
            'status' => $request->status
        ]);

        return redirect()->back()->with('success', 'Job application status updated successfully');
    }
    public function destroy($id)
    {
        $job = JobCandidate::findOrFail($id);
        $job->delete();
        return redirect()->back()->with('success', 'Job application deleted successfully');
    }
}
