<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ExperienceRange;
use Illuminate\Http\Request;

class ExperienceRangeController extends Controller
{
    public function index()
    {
        $experienceRanges = ExperienceRange::all();
        return view('experienceRanges.index' , compact('experienceRanges'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);
        ExperienceRange::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);
        return redirect()->route('experienceRanges');
    }
    public function edit($id)
    {
        $experienceRange = ExperienceRange::findOrFail($id);
        return view('experienceRanges.edit' , compact('experienceRange'));
    }
    public function update(Request $request , $id)
    {
        $experienceRange = ExperienceRange::findOrFail($id);
        $experienceRange->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);
        return redirect()->route('experienceRanges');
    }
    public function destroy($id)
    {
        $experienceRange = ExperienceRange::findOrFail($id);
        $experienceRange->delete();
        return redirect()->route('experienceRanges');
    }
}
