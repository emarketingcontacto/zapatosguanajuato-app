@extends('layout')

@section('main-content')
<h1>Seassons</h1>

<div class="container">
        <a href="{{route('Seasson.create')}}" class="btn btn-sm btn-primary">Create</a>
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
                  <th scope="col">Start</th>
                  <th scope="col">End</th>
                </tr>
              </thead>
              <tbody>

                @foreach ($Seassons as $seasson )
                <tr>
                    <td>{{$seasson['seassonId']}}</td>
                    <td>{{$seasson['seassonName']}}</td>
                    <td>{{$seasson['seassonStart']}}</td>
                    <td>{{$seasson['seassonEnd']}}</td>


                    <td>
                        <div class="d-flex w-100">

                        <a href="{{route('Seasson.edit',['seasson'=>$seasson])}}" class="btn btn-sm btn-primary">Edit</a>
                        <form action="{{route('Seasson.destroy',['seasson'=>$seasson])}}" method="post">
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
