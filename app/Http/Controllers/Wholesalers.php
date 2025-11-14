<?php

namespace App\Http\Controllers;

use App\Models\Biz;
use App\Models\Bizcategory;
use App\Models\SaleType;
use Illuminate\Http\Request;
use App\Models\ModelCategory;
use Illuminate\Support\Facades\DB;


class Wholesalers extends Controller
{
    public function __invoke(Request $request){
        $biztyperequest = "Mayorista";
        $business = null;

        $business = DB::table('biz')
        ->join ('bizcategories', 'biz.bizcatId', '=', 'bizcategories.bizcatId')
        ->join('saletype', 'biz.saletypeId', '=', 'saletype.saletypeId')
        ->select(
            'biz.*',
            'bizcategories.bizcatName',
            'saletype.saletypeName')
        ->where('bizcategories.bizcatName', '=', $biztyperequest)
        ->get();

        $bizcat = Bizcategory::where('bizcatName', $biztyperequest)->first();
        $modelcategories = ModelCategory::all();
        return view('Wholesalers.Wholesalers', ['business'=>$business,'bizcat' => $bizcat]);
    }

    public function showWholesaler(string $wholesaler, Request $request){

        $biz = Biz::where('bizSlug', $wholesaler )->first();
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
        return view('Wholesalers.Wholesalers-detail',['biz'=>$biz, 'bizcat'=>$bizcat, 'saletype'=>$saletype, 'modelos'=>$modelos, 'modelcategories'=>$modelcategories]);


    }

    public function showGenero(string $genero, Request $request){
        // dd($genero);
        //variables
        $bizCategory = "Mayorista";
        $modelcategory ='';
        $viewPage='';
        switch ($genero) {
            case 'mujer':
                $modelcategory = 'Damas';
                $viewPage = "Wholesalers.damas";
                break;
            case 'hombres':
                $modelcategory = 'Hombres';
                $viewPage = "Wholesalers.hombres";
                break;
            case 'ninos':
                $modelcategory = 'Niños';
                $viewPage = "Wholesalers.ninos";
                break;
            case 'ninas':
                $modelcategory = 'Niñas';
                    $viewPage = "Wholesalers.ninas";
                break;
            default:
                # code...
                break;
        }

        $business = DB::table('biz')
            ->join ('bizcategories', 'biz.bizcatId', '=', 'bizcategories.bizcatId')
            ->join('saletype', 'biz.saletypeId', '=', 'saletype.saletypeId')
            ->join( 'modelcategory_biz','biz.bizId', '=', 'modelcategory_biz.bizId')
            ->join( 'modelcategory', 'modelcategory.modelcatId', '=', 'modelcategory_biz.modelcatId')
            ->select(
                'biz.*',
                'bizcategories.bizcatName',
                'saletype.saletypeName',
                'modelcategory_biz.modelcatId',
                'modelcategory.modelcatName')
            ->where('bizcategories.bizcatName', '=', $bizCategory)
            ->where('modelcategory.modelcatName', '=', $modelcategory)->get();

        $bizcat = Bizcategory::where('bizcatName', $bizCategory)->first();
        $modelcat = ModelCategory::where('modelcatName', $modelcategory)->first();


        return view($viewPage,['business'=>$business, 'bizcat' => $bizcat, 'modelcat'=>$modelcat]);
    }

    public function showTipo(string $genero, string $tipo, Request $request){
        //dd($genero,$tipo);
        $bizcategory='Mayorista';
        //get genero according Database field
        switch ($genero) {
            case 'mujer':
                $genero = 'Damas';
                break;
            case 'hombres':
                 $genero = 'Hombres';
                break;
            case 'ninos':
                 $genero = 'Niños';
                break;
            case 'ninas':
                 $genero = 'Niñas';
                break;
            default:
                $genero = $genero;
                break;
        }

        $modelsfactories = DB::table('model')
        ->select('model.*','biz.bizName', 'modelsubcategory.modelsubcatName','bizcategories.bizcatName')
        ->join('modelcategory','model.modelcatId','=', 'modelcategory.modelcatId')
        ->join('biz','model.bizId', '=', 'biz.bizId')
        ->join('bizcategories', 'biz.bizcatId', '=', 'bizcategories.bizcatId')
        ->join('modelsubcategory', 'model.modelsubcatId','=', 'modelsubcategory.modelsubcatId')
        ->where('bizcategories.bizcatName', '=', $bizcategory)
        ->where('modelcategory.modelcatName','=', $genero)
        ->where('modelsubcategory.modelsubcatName', '=', ucfirst($tipo))
        ->get();

        return view('Wholesalers.tipo',['modelsfactories'=>$modelsfactories,'bizcategory'=>$bizcategory, 'genero'=>$genero,'tipo'=>$tipo]);
    }
}
