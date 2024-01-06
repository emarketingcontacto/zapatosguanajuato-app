<?php

namespace App\Http\Controllers;

use App\Models\Seasson;
use Illuminate\Http\Request;

class SeassonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Seasson.index', ['Seassons' => Seasson::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Seasson.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $validateData= $request->validate(
            [
                'seassonName' =>'required',
                'seassonStart' =>'required',
                'seassonEnd' =>'required'
            ]);

            Seasson::create($validateData);
            return redirect('Seasson')->with('success', 'Inserted Succesfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Seasson $seasson)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Seasson $seasson)
    {
        return view('Seasson.edit', ['Seasson'=>$seasson]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Seasson $seasson)
    {
       // dd($request);
        $validateData= $request->validate(
            [
                'seassonName' =>'required',
                'seassonStart' =>'required',
                'seassonEnd' =>'required'
            ]);

            $seasson->update($validateData);
            return redirect('Seasson')->with('success', 'Updated Succesfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Seasson $seasson)
    {
        $seasson->delete();
        return redirect('Seasson')->with('success' , 'Deleted Succesfully!');
    }
}
