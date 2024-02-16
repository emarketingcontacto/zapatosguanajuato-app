<?php

namespace App\Http\Controllers;

use App\Models\Biz;
use App\Models\Modelo;
use App\Models\SaleType;
use App\Models\Bizcategory;
use Illuminate\Http\Request;
use App\Models\ModelCategory;
use App\Models\ModelCategoryBiz;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use PhpParser\Node\Stmt\Foreach_;

use function Laravel\Prompts\table;

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
        $modelcategories = ModelCategory::all();
        return view('Biz.create', ['bizcategories'=>$bizcategories, 'saletypes'=>$saletypes, 'modelcategories'=>$modelcategories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      // dd($request->modelcatid);
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
       $lastbiz = DB::table('biz')->orderBy('bizId', 'desc')->first();

       foreach ($request->modelcatid as $key => $value) {
            DB::table('modelcategory_biz')
            ->insert([
                'bizId'=>$lastbiz->bizId,
                'modelcatId' => $value
            ]);
       }

        return redirect('Biz')->with('success', 'Created Successfully');
    }

    public function show(Biz $biz, Request $request){

        $bizcat = Bizcategory::where('bizcatId', $biz->bizcatId)->first();
        $saletype = SaleType::where('saletypeId', $biz->saletypeId)->first();



        $modelcategories = DB::table('modelcategory')
        ->join('modelcategory_biz', 'modelcategory.modelcatId', '=', 'modelcategory_biz.modelcatId' )
        ->select('modelcategory_biz.*', 'modelcategory.modelcatName')
        ->where('modelcategory_biz.bizId', '=', $biz->bizId)->get();

       if($request->modelsubcatname === null)
       {
        $modelos = DB::table('model')
        ->join('material', 'model.materialId','=','material.materialId')
        ->join('seasson', 'model.seassonId','=','seasson.seassonId')
        ->join('modelsubcategory', 'modelsubcategory.modelsubcatId', '=', 'model.modelsubcatId')
        ->select('model.*', 'material.materialName','seasson.seassonName', 'modelsubcategory.modelsubcatName')
        ->where('bizId', $biz->bizId)->get();

        }else{

            $modelos = DB::table('model')
            ->join('material', 'model.materialId','=','material.materialId')
            ->join('seasson', 'model.seassonId','=','seasson.seassonId')
            ->join('modelsubcategory', 'modelsubcategory.modelsubcatId', '=', 'model.modelsubcatId')
            ->select('model.*', 'material.materialName','seasson.seassonName', 'modelsubcategory.modelsubcatName')
            ->where('modelsubcategory.modelsubcatName', '=', $request->modelsubcatname)
            ->where('bizId', $biz->bizId)->get();


        }
        //return view('Biz.show',['biz'=>$biz, 'bizcat'=>$bizcat, 'saletype'=>$saletype, 'modelos'=>$modelos , 'likesCount'=>$likesCount]);
        return view('Biz.show',['biz'=>$biz, 'bizcat'=>$bizcat, 'saletype'=>$saletype, 'modelos'=>$modelos, 'modelcategories'=>$modelcategories]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Biz $biz)
    {
        $bizcategories = Bizcategory::all();
        $saletypes = SaleType::all();
        $modelcategoriesall = ModelCategory::all();

        $modelcategories = DB::table('modelcategory')
            ->join('modelcategory_biz', 'modelcategory.modelcatId', '=', 'modelcategory_biz.modelcatId' )
            ->select('modelcategory_biz.*', 'modelcategory.modelcatName')
            ->where('modelcategory_biz.bizId', '=', $biz->bizId)->get();

        return view('Biz.edit',['biz' => $biz,'bizcategories' => $bizcategories,'saletypes' => $saletypes,'modelcategoriesall'=>$modelcategoriesall ,'modelcategories'=>$modelcategories]);
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

            DB::table('modelcategory_biz')
            ->select('*')
            ->where("bizId", "=", $biz->bizId)
            ->delete();


            foreach ($request->modelcatid as $key => $value) {
                DB::table('modelcategory_biz')
                ->insert([
                    'bizId'=>$biz->bizId,
                    'modelcatId' => $value
                ]);

            };

            $biz->update($validData);
            return redirect('Biz')->with('success', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Biz $biz)
    {
        $biz->delete();

        DB::tabla('modelcategory_biz')
        ->where('bizId', '=', $biz->bizId)
        ->delete();

        return redirect('Biz')->with('success', 'Deleted Succesfully');
    }
}
