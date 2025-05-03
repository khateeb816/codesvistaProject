<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\EducationCategories as EducationCategory;
use Illuminate\Http\Request;

class EducationCategoryController extends Controller
{
    public function index()
    {
        $educationCategories = EducationCategory::all();
        return view('educationCategories.index' , compact('educationCategories'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
        EducationCategory::create([
            'name' => $request->name,
        ]);
        return redirect()->route('educationCategories');
    }
    public function edit($id)
    {
        $educationCategory = EducationCategory::findOrFail($id);
        return view('educationCategories.edit' , compact('educationCategory'));
    }
    public function update(Request $request , $id)
    {
        $educationCategory = EducationCategory::findOrFail($id);
        $educationCategory->update([
            'name' => $request->name,
        ]);
        return redirect()->route('educationCategories');
    }
    public function destroy($id)
    {
        $educationCategory = EducationCategory::findOrFail($id);
        $educationCategory->delete();
        return redirect()->route('educationCategories');
    }
}
