<x-layout pageTitle="Management" pageDescription="BizCategory" keywords="BizCategory">
    @section('main-content')
    <h1>Create BizCategory </h1>
    <div class="container">
        <form method="POST" action="{{route('BizCategory.store')}}" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="mb-3">
            <label for="bizcatId" class="form-label">ID</label>
            <input type="number" name="bizcatId" id="bizcatId" class="form-control w-25" disabled>
            </div>

            <div class="mb-3">
            <label for="bizcatName" class="form-label">Name</label>
            <input type="text"  id="bizcatName"  name="bizcatName" class="form-control w-50">
            {{-- Error --}}
            @error('bizcatName')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            </div>

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
