<?php

namespace App\Http\Controllers;

use App\Models\RecruitmentAgent;
use Illuminate\Http\Request;

class RecruitmentAgentController extends Controller
{
    public function index()
    {
        $recruitmentAgents = RecruitmentAgent::all();
        return view('recruitmentAgents.index' , compact('recruitmentAgents'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'location' => 'required',
            'cnic' => 'required',
            'primary_email' => 'nullable',
            'secondary_email' => 'nullable',
            'primary_phone' => 'nullable',
            'secondary_phone' => 'nullable',
            'file_path' => 'nullable',
        ]);
        $fileName = null;
        if ($request->hasFile('file_path')) {
            $file = $request->file('file_path');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('storage'), $fileName);
            $request->merge(['file_path' => $fileName]);
        }
        $recruitmentAgent = RecruitmentAgent::create([
            'name' => $request->name,
            'location' => $request->location,
            'cnic' => $request->cnic,
            'primary_email' => $request->primary_email,
            'secondary_email' => $request->secondary_email,
            'primary_phone' => $request->primary_phone,
            'secondary_phone' => $request->secondary_phone,
            'file_path' => $fileName,
        ]);
        return redirect()->route('recruitmentAgents');
    }

    public function edit($id)
    {
        $recruitmentAgent = RecruitmentAgent::findOrFail($id);
        return view('recruitmentAgents.edit' , compact('recruitmentAgent'));
    }

    public function update(Request $request , $id)
    {
        $request->validate([
            'name' => 'required',
            'location' => 'required',
            'cnic' => 'required',
            'primary_email' => 'nullable',
            'secondary_email' => 'nullable',
            'primary_phone' => 'nullable',
            'secondary_phone' => 'nullable',
            'file_path' => 'nullable',
        ]);
        $recruitmentAgent = RecruitmentAgent::findOrFail($id);
        $fileName = $recruitmentAgent->file_path;
        if ($request->hasFile('file_path')) {
            $file = $request->file('file_path');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('storage'), $fileName);
            $request->merge(['file_path' => $fileName]);
        }
        $recruitmentAgent->update([
            'name' => $request->name,
            'location' => $request->location,
            'cnic' => $request->cnic,
            'primary_email' => $request->primary_email,
            'secondary_email' => $request->secondary_email,
            'primary_phone' => $request->primary_phone,
            'secondary_phone' => $request->secondary_phone,
            'file_path' => $fileName,
        ]);
        return redirect()->route('recruitmentAgents');
    }

    public function destroy($id)
    {
        $recruitmentAgent = RecruitmentAgent::findOrFail($id);
        $recruitmentAgent->delete();
        return redirect()->route('recruitmentAgents');
    }
}
