@extends('layout')

@section('main-content')

<h1>Edit SubCategory</h1>

<div class="container">

    <form action="{{route('ModelSubcategory.update',['modelsubcategory'=>$modelsubcategory])}}" method="POST">
        @csrf
        @method('put')

        <div class="mb-2">
            <label for="submodelcatId" class="form-label">ID</label>
            <input type="number" class="form-control w-25" name="modelsubcatId" value="{{$modelsubcategory->modelsubcatId }}" disabled>
        </div>

        <div class="mb-2">
            <label for="modelcatId" class="form-label">Category</label>

            <select name="modelcatId" id="modelcatId" class="form-control dropdown w-25" >

                <option value="">--Please choose an option--</option>

                    @foreach ($modelcategories as $modelcategory)

                        @if ($modelcategory->modelcatId == $modelsubcategory->modelcatId)
                            <option value="{{$modelcategory->modelcatId}}" selected>{{$modelcategory->modelcatName}}</option>
                        @endif
                            <option value="{{$modelcategory->modelcatId}}">{{$modelcategory->modelcatName}}</option>

                    @endforeach
            </select>
        </div>

        <div class="mb-2">
            <label for="modelsubcatName" class="form-label">Name</label>
            <input type="text" name="modelsubcatName" class="form-control w-25" value="{{$modelsubcategory->modelsubcatName }}">
             {{-- Error --}}
            @error('submodelcatName')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        {{-- Buttons --}}
        <div class="d-flex justify-content-end w-25 ">
            <input type="submit" value="Save" class="btn btn-sm btn-primary mx-2">
            <a href="/ModelSubcategory" class="btn btn-sm btn-danger">Cancel</a>
        </div>
    </form>

</div>
@endsection




