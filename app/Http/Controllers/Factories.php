<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Bizcategory;

class Factories extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $business = DB::table('biz')
        ->join ('bizcategories', 'biz.bizcatId', '=', 'bizcategories.bizcatId')
        ->join('saletype', 'biz.saletypeId', '=', 'saletype.saletypeId')
        ->select(
            'biz.*',
            'bizcategories.bizcatName',
            'saletype.saletypeName')
        ->where('bizcategories.bizcatName', '=', 'Fabricante')->get();

        $bizcat = Bizcategory::where('bizcatName', 'Fabricante')->first();


        return view('Factories', ['business'=>$business, 'bizcat' => $bizcat]);
    }
}
