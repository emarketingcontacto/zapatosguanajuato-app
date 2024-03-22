{{-- @extends('layout') --}}
<x-layout pageTitle="Management">

    @section('main-content')
    <h1>Subcategories </h1>

    <div class="container">
        <a href="{{route('ModelSubcategory.create')}}" class="btn btn-sm btn-primary">Create</a>

        <hr class="w-50">

        @if (session()->has('success'))
            <div id="success" class="alert alert-success">
                {{session('success')}}
            </div>
        @endif

        <table class="table table-striped w-50">
            <thead>
                <tr>
                    <td>Id</td>
                    <td>Name</td>
                    <td>Category</td>
                    <td>Manager</td>
                </tr>
            </thead>
            <tbody>
                @foreach ( $ModelSubcategories as $modelsubcategory )
                <tr>
                    <td>{{$modelsubcategory->modelsubcatId}}</td>
                    <td>{{$modelsubcategory->modelsubcatName}}</td>
                    <td>{{$modelsubcategory->modelcatName}}</td>
                    <td>
                        <div class="d-flex">
                            <a href="{{route('ModelSubcategory.edit', ['modelsubcategory'=>$modelsubcategory->modelsubcatId])}}" class="btn btn-sm btn-primary">Edit</a>
                        <form action="{{route('ModelSubcategory.destroy', ['modelsubcategory'=>$modelsubcategory->modelsubcatId])}}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete" class="btn btn-sm btn-danger mx-2">
                        </form>
                    </div>
                    </td>
                </tr>
                @endforeach
    </div>

    @endsection

</x-layout>
