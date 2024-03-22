{{-- @extends('layout') --}}
<x-layout pageTitle="Management">

    @section('main-content')
    <h1>Create ModelCategory </h1>
    <div class="container">
        <form method="POST" action="{{route('ModelCategory.store')}}" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="mb-3">
            <label for="modelcatId" class="form-label">ID</label>
            <input type="number" name="modelcatId" id="modelcatId" class="form-control w-25" disabled>
            </div>
            <div class="mb-3">
            <label for="modelcatName" class="form-label">Name</label>
            <input type="text"  id="modelcatName"  name="modelcatName" class="form-control w-50">
            {{-- Error --}}
            @error('modelcatName')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            </div>
            <div class="mb-3">
                <label for="modelcatImage" class="form-label">Image</label>
                <input type="file"  id="modelcatImage"  name="modelcatImage" class="form-control w-50">
            {{-- Error --}}
            @error('modelcatImage')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            </div>
            <button type="submit" class="btn btn-sm btn-primary">Save</button>
            <a href="/ModelCategory" class="btn btn-sm btn-danger">Cancel</a>
        </form>
    </div>
    @endsection

</x-layout>
