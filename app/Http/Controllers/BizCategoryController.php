<?php

namespace App\Http\Controllers;

use App\Models\Bizcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BizCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('BizCategory.index', ['Bizcategories'=>Bizcategory::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('BizCategory.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request);
        //Validations
        $validData = $request->validate(
            [
                'bizcatName'=>'required',
                'bizcatImage' => 'required'
            ]);

        if($request->hasFile('bizcatImage')){
            $validData['bizcatImage'] = $request->file('bizcatImage') ->store('bizcatimages', 'public');
        }

        Bizcategory::create($validData);
        return redirect(route('BizCategory.index'))->with('success' , 'Inserted Succesfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Bizcategory $bizcategory)
    {
        return view('BizCategory.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bizcategory $bizcategory)
    {
        //dd($bizcategory->bizcatName);
        return view('BizCategory.edit', ['Bizcategory' => $bizcategory]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Bizcategory $bizcategory)
    {

        //dd($request);

        //Validations
        $validData = $request->validate(
            [
                'bizcatName'=>'required',
                'bizcatImage' => 'required'
            ]);

        if($request->hasFile('bizcatImage')){
            //Delete old image
            //Storage::disk('public')->delete('public/storage/bizcatimages', $bizcategory->bizcatImage);
            // Save new image
            $validData['bizcatImage'] = $request->file('bizcatImage')->store('bizcatimages', 'public');
        }

        $bizcategory->update($validData);
        return redirect(route('BizCategory.index'))->with('success', 'Updated Succesfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bizcategory $bizcategory)
    {
        //Delete old image
        Storage::disk('public')->delete('public/storage/bizcatimages', $bizcategory->bizcatImage);
        $bizcategory->delete();
        return redirect(route('BizCategory.index'))->with('success', 'Deleted Succesfully');
    }
}
