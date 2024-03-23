<x-layout pageTitle="Management" pageDescription="ModelCategory">

    @section('main-content')
    <div class="container m-5">
        <h1>Show Model Category </h1>
        <form enctype="multipart/form-data">
            <div class="m-2">
            <label for="modelcatId" class="form-label">ID</label>
            <input type="number" name="modelcatId" id="modelcatId" value="{{$modelcategory->modelcatId}}" class="form-control w-25" disabled>
            </div>
            <div class="mb-2">
            <label for="modelcatName" class="form-label">Name</label>
            <input type="text"  id="modelcatName"  name="modelcatName" value="{{$modelcategory->modelcatName}}" class="form-control w-50">
            </div>
            <div class="mb-2">
                <img src="{{asset('storage/'.$modelcategory->modelcatImage)}}" alt="{{'storage/logos'}}" width="600" height="600">
                {{-- <img src="{{asset('/'.$modelcategory->modelcatImage)}}" alt="{{'/logos'}}" width="600" height="600"> --}}
            </div>
            {{-- controls --}}
                <a href="{{route('ModelCategory.edit',['modelCategory'=>$modelcategory])}}" class="btn btn-sm btn-warning">Edit</a>
                <a href="/ModelCategory" class="btn btn-sm btn-danger">Cancel</a>
        </form>
    </div> {{-- end container --}}
    @endsection

</x-layout>
