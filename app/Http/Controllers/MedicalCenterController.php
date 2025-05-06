<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Airlines;
use App\Models\MedicalCenter;
use Illuminate\Http\Request;

class MedicalCenterController extends Controller
{
    
    public function index()
    {
        $medicalCenters = MedicalCenter::all();
        return view('medicalCenters.index' , compact('medicalCenters'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'city' => 'nullable',
            'name' => 'required',
            'phone' => 'nullable',
            'contact_person' => 'nullable',
            'address' => 'nullable',    
            'email' => 'required',
            'fax' => 'nullable',
            'location' => 'nullable',
        ]);
        MedicalCenter::create([
            'name' => $request->name,
            'city' => $request->city,
            'phone' => $request->phone,
            'contact_person' => $request->contact_person,
            'address' => $request->address,
            'email' => $request->email,
            'fax' => $request->fax,
            'location' => $request->location,
        ]);
        return redirect()->route('medicalCenters');
    }
    public function edit($id)
    {
        $medicalCenter = MedicalCenter::findOrFail($id);
        return view('medicalCenters.edit' , compact('medicalCenter'));
    }
    public function update(Request $request , $id)
    {
        $medicalCenter = MedicalCenter::findOrFail($id);
        $medicalCenter->update([
           'name' => $request->name,
            'city' => $request->city,
            'phone' => $request->phone,
            'contact_person' => $request->contact_person,
            'address' => $request->address,
            'email' => $request->email,
            'fax' => $request->fax,
            'location' => $request->location,
        ]);
        return redirect()->route('medicalCenters');
    }
    public function destroy($id)
    {
        $medicalCenter = MedicalCenter::findOrFail($id);
        $medicalCenter->delete();
        return redirect()->route('medicalCenters');
    }
}
