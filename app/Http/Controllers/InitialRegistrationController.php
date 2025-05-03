<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Candidate;
use App\Models\ExperienceRange;
use Illuminate\Http\Request;

class InitialRegistrationController extends Controller
{
    public function index()
    {
        $candidates = Candidate::all();
        $experiences = ExperienceRange::all();
        return view('InitialRegistration.index' , compact('candidates' , 'experiences'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'mobile' => 'required',
            'experience' => 'nullable',
            'profession' => 'nullable',
            'address' => 'nullable',
        ]);
        Candidate::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'experience' => $request->experience,
            'profession' =>     $request->profession,
            'address' => $request->address,
        ]);
        return redirect()->route('initialRegistration');
    }
    public function edit($id)
    {
        $candidate = Candidate::findOrFail($id);
        $experiences = ExperienceRange::all();
        return view('InitialRegistration.edit' , compact('candidate' , 'experiences'));
    }
    public function update(Request $request , $id)
    {
        $candidate = Candidate::findOrFail($id);
        $candidate->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'experience' => $request->experience,
            'profession' => $request->profession,
            'address' => $request->address,
        ]);
        return redirect()->route('initialRegistration');
    }
    public function destroy($id)
    {
        $candidate = Candidate::findOrFail($id);
        $candidate->delete();
        return redirect()->route('initialRegistration');
    }
}
