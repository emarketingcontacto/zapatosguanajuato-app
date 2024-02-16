<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Bizcategory;
use App\Models\ModelCategory;

class Factories extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
       // dd($request->modelcat);
       $biztyperequest = "Fabricante";
        $business = null;

        if($request->modelcat === null){
            $business = DB::table('biz')
            ->join ('bizcategories', 'biz.bizcatId', '=', 'bizcategories.bizcatId')
            ->join('saletype', 'biz.saletypeId', '=', 'saletype.saletypeId')
            ->select(
                'biz.*',
                'bizcategories.bizcatName',
                'saletype.saletypeName')
            ->where('bizcategories.bizcatName', '=', $biztyperequest)->get();

        } else{
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
            ->where('bizcategories.bizcatName', '=', $biztyperequest)
            ->where('modelcategory.modelcatName', '=', $request->modelcat)->get();
        }

        $bizcat = Bizcategory::where('bizcatName', $biztyperequest)->first();
        $modelcategories = ModelCategory::all();
        return view('Factories', ['business'=>$business, 'bizcat' => $bizcat , 'modelcategories'=>$modelcategories]);
    }
}
