@extends('layout')

@section('main-content')

<div  class="container m-4">
    <h1>Edit Modelo</h1>

    <form action="{{route('Modelo.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('POST')

        {{-- Id --}}
        <div class="mb-3">
            <label for="modelId" class="form-label">ID</label>
            <input type="number" name="modelId" class="form-control w-25" disabled value="{{$modelo->modelId}}">
        </div>

        {{-- modelName --}}
        <div class="mb-3">
            <label for="modelName" class="form-label">Model Name</label>
            <input type="text" name="modelName" class="form-control w-25" value="{{$modelo->modelName}}" >
            <p class="form-text">Most be 3 characters lenght</p>
            {{-- Error --}}
            @error('modelName')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        {{-- modelPrice --}}
        <div class="mb-3">
            <label for="modelPrice" class="form-label">Model Price</label>
            <input type="text" name="modelPrice" class="form-control w-25" value="{{$modelo->modelPrice}}">
            {{-- Error --}}
            @error('modelPrice')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        {{-- modelImage --}}
        <div class="mb-3">
            <label for="modelImage" class="form-label">Model Image</label>
            <input type="file" name="modelImage" class="form-control w-25" value="{{$modelo->modelImage}}">
            {{-- Error --}}
            @error('modelImage')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        {{-- modelMaterial --}}
        <div class="mb-3">
            <label for="materialId" class="form-control bg-light">Material</label>
            <select name="materialId" class="form-control dropdown w-100">
                <option value="">--Please choose an option--</option>
                @foreach ($materials as $material)
                    @if ($material->materialId === $modelo->materialId)
                        <option value="{{$material->materialId}}" selected>{{$material->materialName}}</option>
                    @endif
                    <option value="{{$material->materialId}}"> {{$material->materialName}} </option>
                @endforeach
            </select>
            {{-- Error --}}
            @error('materialId')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

         {{-- Seasson --}}
         <div class="mb-3">
            <label for="seassonId" class="form-control bg-light">Seasson</label>
            <select name="seassonId" class="form-control dropdown w-100">
                <option value="">--Please choose an option--</option>
                @foreach ($seassons as $seasson)
                @if ($seasson->seassonId === $modelo->seassonId)
                    <option value="{{$seasson->seassonId}}" selected>{{$seasson->seassonName}}</option>

                @endif
                    <option value="{{$seasson->seassonId}}"> {{$seasson->seassonName}} </option>
                @endforeach
            </select>
            {{-- Error --}}
            @error('seassonId')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>


         {{-- Biz --}}
         <div class="mb-3">
            <label for="bizId" class="form-control bg-light">Biz</label>
            <select name="bizId" class="form-control dropdown w-100">
                <option value="">--Please choose an option--</option>
                @foreach ($business as $biz)
                @if ($biz->bizId === $modelo->bizId)
                    <option value="{{$biz->bizId}}" selected> {{$biz->bizName}}</option>
                @endif
                    <option value="{{$biz->bizId}}"> {{$biz->bizName}} </option>
                @endforeach
            </select>
            {{-- Error --}}
            @error('bizId')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        {{-- controls --}}
        <div class="d-flex flex-row p-3 justify-content-end" >
            <input type="submit" value="Update" class="btn btn-sm btn-primary">
            <a href="/Modelo" class="btn btn-sm btn-danger">Cancel</a>
        </div>


    </form>

</div-container>

@endsection
