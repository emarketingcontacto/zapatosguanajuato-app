{{-- @extends('layout') --}}
<x-layout pageTitle="Management" pageDescription="BizCategory">

    @section('main-content')

    <div class="container mb-5 mt-5 pb-5">
        <h1>Edit BizCategory </h1>
        <form method="POST" action="{{route('BizCategory.update', ['bizcategory'=>$Bizcategory])}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
            <label for="bizcatId" class="form-label">ID</label>
            <input type="number" name="bizcatId" id="bizcatId" class="form-control w-25"
                value="{{$Bizcategory->bizcatId}}" disabled>
            </div>

            <div class="mb-3">
                <label for="bizcatName" class="form-label">Name</label>
                <input type="text"  id="bizcatName"  name="bizcatName"
                    value="{{$Bizcategory->bizcatName}}" class="form-control w-50">
                {{-- Error --}}
                @error('bizcatName')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <img src="{{asset('storage/'.$Bizcategory->bizcatImage)}}" alt="{{'storage/bizcatimages'}}" width="600" height="600">

            <div class="mb-3">
                <label for="bizcatImage" class="form-label">Image</label>
                <input type="file"  id="bizcatImage"  name="bizcatImage" class="form-control w-50">
            {{-- Error --}}
            @error('bizcatName')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            </div>

            <button type="submit" class="btn btn-sm btn-primary">Save</button>
            <a href="/BizCategory" class="btn btn-sm btn-danger">Cancel</a>
        </form>
    </div>
    @endsection
</x-layout>
