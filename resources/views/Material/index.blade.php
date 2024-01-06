@extends('layout')

@section('main-content')

<h1>Materials</h1>

<div class="container">
        <a href="/Material/create" class="btn btn-sm btn-primary">Create</a>
        <hr class="w-50">

        @if (session()->has('success'))
            <div id="success" class="alert alert-success">
                {{session('success')}}
            </div>
        @endif


        <table class="table table-striped">

            <thead>
                <tr>
                  <th scope="col">Id</th>
                  <th scope="col">Name</th>
                </tr>
              </thead>
              <tbody>

                @foreach ($Material as $material )
                <tr>
                    <td>{{$material['materialId']}}</td>
                    <td>{{$material['materialName']}}</td>


                    <td>
                        <div class="d-flex w-100">

                        <a href="{{route('Material.edit',['material'=>$material])}}" class="btn btn-sm btn-primary">Edit</a>
                        <form action="{{route('Material.destroy',['material'=>$material])}}" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete" class="btn btn-sm btn-danger">
                        </form>

                    </div>
                    </td>
                </tr>
                @endforeach

              </tbody>

        </table>


    </div>


@endsection
