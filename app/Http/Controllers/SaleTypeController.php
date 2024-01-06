<?php

namespace App\Http\Controllers;

use App\Models\Bizcategory;
use App\Models\SaleType;
use Illuminate\Http\Request;

class SaleTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         return view('SaleType.index',['saletypes' => SaleType::all()] );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('SaleType.create');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd(request());

        $validData = $request->validate(
            [
                'saletypeName' => 'required',
                'saletypeConditions' => 'required'
            ]);

            SaleType::create($validData);
            return redirect(route('SaleType.index'))->with('success', 'Created Succesfully');

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SaleType $saletype)
    {
        //dd($saletype);
        return view('SaleType.edit', ['saletype' => $saletype]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SaleType $saletype)
    {
        //dd($saletype);
        //dd($request);
        $validData = $request->validate(
            [
                'saletypeName'=>'required',
                'saletypeConditions' => 'required'
            ]);
            $saletype->update($validData);
            return redirect(route('SaleType.index'))->with('success', 'Updated Succesfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SaleType $saletype)
    {
       // dd($saletype);

       $saletype->delete();
        return redirect(route('SaleType.index'));
    }
}
