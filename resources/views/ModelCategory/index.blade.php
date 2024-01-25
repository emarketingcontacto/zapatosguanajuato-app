@extends('layout')

@section('main-content')

<h1>ModelCategories</h1>

<div class="container">
    <a href="{{route('ModelCategory.create')}}" class="btn btn-sm btn-primary">Create</a>
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
                <td>Image</td>
                <td>Manager</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($ModelCategories as $modelcategory )
            <tr>
                <td>{{$modelcategory['moodelcatId']}}</td>
                <td>{{$modelcategory['modelcatName']}}</td>
                <td>{{$modelcategory['modelcatImage']}}</td>

                <td>
                    <div class="d-flex">
                    <a href="{{route('ModelCategory.show',['modelCategory'=>$modelcategory])}}" class="btn btn-sm btn-primary mx-1">Show</a>

                    <a href="{{route('ModelCategory.edit',['modelCategory'=>$modelcategory])}}" class="btn btn-sm btn-primary mx-1">Edit</a>

                    <form action="{{route('ModelCategory.destroy', ['modelCategory'=>$modelcategory])}}" method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Delete" class="btn btn-sm btn-danger mx-2">
                    </form>
                </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>


</div>

@endsection
