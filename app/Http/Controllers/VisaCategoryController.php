<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VisaCategory;

class VisaCategoryController extends Controller
{
    public function index()
    {
        $visaCategories = VisaCategory::all();
        return view('visaCategories.index' , compact('visaCategories'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'visa_category' => 'required',
        ]);
        VisaCategory::create([
            'visa_category' => $request->visa_category,
        ]);
        return redirect()->route('visaCategories');
    }
    public function edit($id)
    {
        $visaCategory = VisaCategory::findOrFail($id);
        return view('visaCategories.edit' , compact('visaCategory'));
    }
    public function update(Request $request , $id)
    {
        $visaCategory = VisaCategory::findOrFail($id);
        $visaCategory->update([
            'visa_category' => $request->visa_category,
        ]);
        return redirect()->route('visaCategories');
    }
    public function destroy($id)
    {
        $visaCategory = VisaCategory::findOrFail($id);
        $visaCategory->delete();
        return redirect()->route('visaCategories');
    }
}
