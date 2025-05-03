<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\JobCategories;
use Illuminate\Http\Request;

class JobCategoryController extends Controller
{
    public function index()
    {
        $jobCategories = JobCategories::all();
        return view('jobCategories.index' , compact('jobCategories'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
        JobCategories::create([
            'name' => $request->name,
        ]);
        return redirect()->route('jobCategories');
    }
    public function edit($id)
    {
        $jobCategory = JobCategories::findOrFail($id);
        return view('jobCategories.edit' , compact('jobCategory'));
    }
    public function update(Request $request , $id)
    {
        $jobCategory = JobCategories::findOrFail($id);
        $jobCategory->update([
            'name' => $request->name,
        ]);
        return redirect()->route('jobCategories');
    }
    public function destroy($id)
    {
        $jobCategory = JobCategories::findOrFail($id);
        $jobCategory->delete();
        return redirect()->route('jobCategories');
    }
}
