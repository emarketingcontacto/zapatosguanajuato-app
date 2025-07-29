<?php

namespace App\Http\Controllers\Api\v1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ApiBizResource;
use App\Models\Biz;

class ApiBizController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //return Biz::all();
        return ApiBizResource::collection(Biz::all());
    }
    /**
     * Display the specified resource.
     */
    public function show(Biz $biz)
    {
        return ApiBizResource::make($biz);
    }

}
