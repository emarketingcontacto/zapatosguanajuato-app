<?php

namespace App\Http\Controllers;

use App\Models\Bizcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Retails extends Controller
{
    public function __invoke(Request $request)
    {
        $business = DB::table('biz')
        ->join ('bizcategories', 'biz.bizcatId', '=', 'bizcategories.bizcatId')
        ->join('saletype', 'biz.saletypeId', '=', 'saletype.saletypeId')
        ->select(
            'biz.*',
            'bizcategories.bizcatName',
            'bizcategories.bizcatImage',
            'saletype.saletypeName')
        ->where('bizcategories.bizcatName', '=', 'Minorista')->get();
        /*
        $bizcats = DB::table('bizcategories')
        ->select('bizcatImage')
        ->Where('bizcatName', '=', 'Minorista')->get();
        */
        $bizcat = Bizcategory::where('bizcatName', 'Minorista')->first();

       return view('Retails', ['business'=>$business, 'bizcat' => $bizcat]);

    }
}
