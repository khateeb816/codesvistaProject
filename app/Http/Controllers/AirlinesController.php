<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Airlines;

class AirlinesController extends Controller
{
    public function index()
    {
        $airlines = Airlines::all();
        return view('airlines.index' , compact('airlines'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);
        Airlines::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);
        return redirect()->route('airlines');
    }
    public function edit($id)
    {
        $airline = Airlines::findOrFail($id);
        return view('airlines.edit' , compact('airline'));
    }
    public function update(Request $request , $id)
    {
        $airline = Airlines::findOrFail($id);
        $airline->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);
        return redirect()->route('airlines');
    }
    public function destroy($id)
    {
        $airline = Airlines::findOrFail($id);
        $airline->delete();
        return redirect()->route('airlines');
    }
}
