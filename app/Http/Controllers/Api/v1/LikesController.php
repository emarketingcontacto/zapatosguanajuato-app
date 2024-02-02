<?php

namespace App\Http\Controllers\Api\v1;

use App\Models\Likes;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreLikesRequest;
use App\Http\Requests\UpdateLikesRequest;
use App\Http\Resources\LikesResource;

class LikesController extends Controller
{
    public function index()
    {
        return LikesResource::collection(Likes::all());
    }

    public function show(Likes $like) {
        return LikesResource::make($like);
     }

    public function store(StoreLikesRequest $request)
    {
        $like = Likes::create($request->validated());
        return LikesResource::make($like);
    }
    public function update(UpdateLikesRequest $request, Likes $like)
    {
        $like->update($request->validated());
        return LikesResource::make($like);
    }

    public function destroy(Likes $like)
    {
        $like->delete();
        return response()->noContent();
    }

    //public function create() { }
    //public function edit(string $id){ }
}
