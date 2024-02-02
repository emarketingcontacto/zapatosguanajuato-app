<?php

namespace App\Http\Controllers;

use App\Models\Biz;
use App\Models\Bizcategory;
use App\Models\SaleType;
use App\Models\Modelo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;


class BizController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //select join
        $business = DB::table('biz')
        ->join ('bizcategories', 'biz.bizcatId', '=', 'bizcategories.bizcatId')
        ->join('saletype', 'biz.saletypeId', '=', 'saletype.saletypeId')
        ->select(
            'biz.*',
            'bizcategories.bizcatName',
            'saletype.saletypeName')->get();

        return view('Biz.index', ['bisness'=>$business]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $bizcategories = Bizcategory::all();
        $saletypes = SaleType::all();
        return view('Biz.create', ['bizcategories'=>$bizcategories, 'saletypes'=>$saletypes]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       // dd($request);
       $validData = $request->validate(
        [
            'bizName'=>'required',
            'bizStreetNum'=>'required',
            'bizNeigborhood'=> 'required',
            'bizState' => 'required',
            'bizCity' => 'required',
            'bizTel' => 'required',
            'bizContact' => 'required',
            'bizWhatsApp' => 'required',
            'bizFacebook' => 'required',
            'bizWeb' => 'required',
            'bizEmail' => 'required',
            'bizImage' => 'required',
            'bizcatId' => 'required',
            'saletypeId' => 'required',
            'bizLastvisit' => 'nullable | date'
        ]);

        if($request->hasFile('bizImage')){

            $validData['bizImage'] = $request->file('bizImage')->store('biz', 'public');
        }
        Biz::create($validData);
        return redirect('Biz')->with('success', 'Created Successfully');
    }

    public function show(Biz $biz){
        //dd($biz);
        $bizcat = Bizcategory::where('bizcatId', $biz->bizcatId)->first();
        $saletype = SaleType::where('saletypeId', $biz->saletypeId)->first();

        $modelos = DB::table('model')
        ->join('material', 'model.materialId','=','material.materialId')
        ->join('seasson', 'model.seassonId','=','seasson.seassonId')
        ->select('model.*', 'material.materialName','seasson.seassonName')
        ->where('bizId', $biz->bizId)->get();

        // $likesCount = DB::table('likes')
        // ->select(DB::raw('count(*) as countlikes'))
        // ->where('bizId','=',$biz->bizId)
        // ->get();

       //return view('Biz.show',['biz'=>$biz, 'bizcat'=>$bizcat, 'saletype'=>$saletype, 'modelos'=>$modelos , 'likesCount'=>$likesCount]);
       return view('Biz.show',['biz'=>$biz, 'bizcat'=>$bizcat, 'saletype'=>$saletype, 'modelos'=>$modelos]);

    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Biz $biz)
    {
        $bizcategories = Bizcategory::all();
        $saletypes = SaleType::all();

        return view('Biz.edit',
        [
            'biz' => $biz,
            'bizcategories' => $bizcategories,
            'saletypes' => $saletypes
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Biz $biz)
    {
        //dd($request);
        //dd($biz);
        $validData = $request->validate(
            [
                'bizName'=>'required',
                'bizStreetNum'=>'required',
                'bizNeigborhood'=> 'required',
                'bizState' => 'required',
                'bizCity' => 'required',
                'bizTel' => 'required',
                'bizContact' => 'required',
                'bizWhatsApp' => 'required',
                'bizFacebook' => 'required',
                'bizWeb' => 'required',
                'bizEmail' => 'required',
                'bizcatId' => 'required',
                'saletypeId' => 'required',
                'bizLastvisit' => 'nullable | date',
                'bizImage' => 'nullable'
            ]);

            //Remove from public
            if($request->hasFile('bizImage')){
                Storage::disk('public')->delete('/public/storage/biz', $biz->bizImage);
                $validData['bizImage'] = $request->file('bizImage')->store('biz', 'public');
            }

            $biz->update($validData);
            return redirect('Biz')->with('success', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Biz $biz)
    {
        $biz->delete();
        return redirect('Biz')->with('success', 'Deleted Succesfully');
    }
}
