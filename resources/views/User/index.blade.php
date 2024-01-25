@extends('layout')

@section('main-content')
<h1>Users</h1>
<div class="container">
        <a href="{{route('User.create')}}" class="btn btn-sm btn-primary">Create</a>
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
                  <th scope="col">Email</th>
                  <th scope="col">Password</th>
                </tr>
              </thead>
              <tbody>

                @foreach ($users as $user)
                <tr>
                    <td>{{$user['id']}}</td>
                    <td>{{$user['name']}}</td>
                    <td>{{$user['email']}}</td>
                    <td>{{$user['password']}}</td>
                    <td>
                        <div class="d-flex w-100">
                            {{-- edit --}}
                            <a href="{{route('User.edit', ['user'=>$user])}}" class="btn btn-sm btn-primary">Edit</a>
                            {{-- delete --}}
                            <form action="{{route('User.destroy', ['user'=>$user])}}" method="post">
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
