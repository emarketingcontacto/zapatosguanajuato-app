<?php

namespace App\Http\Controllers;

use App\Models\Material;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Material.index', ['Material' => Material::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Material.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       // dd($request);
       //validation
       $validData = $request->validate(
        [
            'materialName' => 'required'
        ]);
        // Save Data
        Material::create($validData);
        // Return
        return redirect('Material')->with('success', 'Saved Successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Material $material)
    {
        return view('Material.edit', ['material'=>$material]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Material $material)
    {
        //dd($request);
        $validData = $request->validate(
            [
                'materialName' => 'required'
            ]);
            // Save Data
           $material->update($validData);
            // Return
            return redirect('Material')->with('success', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Material $material)
    {
        //dd($material);
        $material->delete();
        return redirect('Material')->with('success', 'Deleted Successfully');

    }
}
