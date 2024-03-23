<x-layout pageTitle="Management" pageDescription="ModelCategory">

    @section('main-content')
    <h1>Edit ModelCategory </h1>
    <div class="container m-5">
        <form method="POST" action="{{route('ModelCategory.update',['modelCategory' => $modelCategory])}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
            <label for="modelcatId" class="form-label">ID</label>
            <input type="number" name="modelcatId" id="modelcatId" value="{{$modelCategory->modelcatId}}" class="form-control w-25" disabled>
            </div>
            <div class="mb-3">
            <label for="modelcatName" class="form-label">Name</label>
            <input type="text"  id="modelcatName"  name="modelcatName" value="{{$modelCategory->modelcatName}}" class="form-control w-50">
            {{-- Error --}}
            @error('modelcatName')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            </div>
            <div class="mb-3">
                <img src="{{asset('storage/'.$modelCategory->modelcatImage)}}" alt="{{'storage/logos'}}" width="600" height="600">
            </div>
            <div class="mb-3">
                <label for="modelcatImage" class="form-label">Image</label>
                <input type="file"  id="modelcatImage" name="modelcatImage" value="{{$modelCategory->modelcatImage }}" class="form-control w-50">
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
