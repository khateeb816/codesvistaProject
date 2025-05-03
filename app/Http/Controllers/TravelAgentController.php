<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Airlines;
use App\Models\TravelAgent;
use Illuminate\Http\Request;

class TravelAgentController extends Controller
{
    public function index()
    {
        $travelAgents = TravelAgent::all();
        $airlines = Airlines::all();
        return view('travelAgents.index' , compact('travelAgents' , 'airlines'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'location' => 'required',
            'arlines_deals_with' => 'required',
            'primary_email' => 'nullable',
            'secondary_email' => 'nullable',
            'primary_phone' => 'nullable',
            'secondary_phone' => 'nullable',
            'file_path' => 'nullable',
            'address' => 'nullable',
        ]);
        $fileName = null;
        if ($request->hasFile('file_path')) {
            $file = $request->file('file_path');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('storage'), $fileName);
            $request->merge(['file_path' => $fileName]);
        }
        $travelAgent = TravelAgent::create([
            'name' => $request->name,
            'location' => $request->location,
            'primary_email' => $request->primary_email,
            'secondary_email' => $request->secondary_email,
            'primary_phone' => $request->primary_phone,
            'secondary_phone' => $request->secondary_phone,
            'file_path' => $fileName,
            'address' => $request->address,
            'arlines_deals_with' => $request->arlines_deals_with,
        ]);
        return redirect()->route('travelAgents');
    }
    public function edit($id)
    {
        $travelAgent = TravelAgent::findOrFail($id);
        return view('travelAgents.edit' , compact('travelAgent'));
    }
    public function update($id , Request $request)
    {
        $travelAgent = TravelAgent::findOrFail($id);
        $fileName = $travelAgent->file_path;
        if ($request->hasFile('file_path')) {
            $file = $request->file('file_path');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('storage'), $fileName);
            $request->merge(['file_path' => $fileName]);
        }
        $travelAgent->update([
            'name' => $request->name,
            'location' => $request->location,
            'primary_email' => $request->primary_email,
            'secondary_email' => $request->secondary_email,
            'primary_phone' => $request->primary_phone,
            'secondary_phone' => $request->secondary_phone,
            'file_path' => $fileName,
            'address' => $request->address,
            'arlines_deals_with' => $request->arlines_deals_with,
        ]);
        return redirect()->route('travelAgents');
    }
    public function destroy($id)
    {
        $travelAgent = TravelAgent::findOrFail($id);
        $travelAgent->delete();
        return redirect()->route('travelAgents');
    }
}
