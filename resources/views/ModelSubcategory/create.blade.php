<x-layout pageTitle="Management" pageDescription="ModelSubcategory">

    @section('main-content')

    <h1>This is create</h1>
    <div class="container">

        <form action="{{route('ModelSubcategory.store')}}" method="post">
            @csrf
            @method('POST')

            <div class="mb-2">
                <label for="submodelcatId" class="form-label">ID</label>
                <input type="number" name="submodelcatId" id="submodelcatId" class="form-control w-25" disabled>
            </div>

            <div class="mb-2">
                <label for="modelcatId" class="form-label">Category</label>
                <select name="modelcatId" id="modelcatId" class="form-control dropdown w-25">
                    <option value="">--Please choose an option--</option>
                    @foreach ($modelcategories as $modelcategory)

                        <option value="{{$modelcategory->modelcatId}}">{{$modelcategory->modelcatName}}</option>

                    @endforeach
                </select>
            </div>

            <div class="mb-2">
                <label for="submodelcatName" class="form-label">Name</label>
                <input type="text" name="modelsubcatName" id="modelsubcatName" class="form-control w-25">

                {{-- Error --}}
                @error('submodelcatName')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="d-flex justify-content-end w-25 ">
                <input type="submit" value="Save" class="btn btn-sm btn-primary mx-2">
                <a href="/ModelSubcategory" class="btn btn-sm btn-danger">Cancel</a>
            </div>
        </form>

    </div>
    @endsection

</x-layout>
