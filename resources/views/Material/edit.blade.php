<x-layout pageTitle="Management" pageDescription="Material">

    @section('main-content')

    <h1>Edit Material</h1>
    <div class="container">
        <form method="POST" action="{{route('Material.update',['material' => $material])}}")}}">
            @csrf
            @method('put')
            <div class="mb-3">
            <label for="materialId" class="form-label">ID</label>
            <input type="number" name="materialId" class="form-control w-25" disabled value="{{$material->materialId}}">
            </div>

            <div class="mb-3">
            <label for="materialName" class="form-label">Name</label>
            <input type="text"  name="materialName" class="form-control w-50" value="{{$material->materialName}}"">
            {{-- Error --}}
            @error('materialName')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            </div>

            <button type="submit" class="btn btn-sm btn-primary">Save</button>
            <a href="/Material" class="btn btn-sm btn-danger">Cancel</a>
        </form>
    </div>
    @endsection

</x-layout>

