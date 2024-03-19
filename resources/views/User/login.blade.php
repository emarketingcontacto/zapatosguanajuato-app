@extends('layout')
@section('main-content')

<h1>Login</h1>
<div class="container">
    <form method="POST" action="{{route('User.authenticate')}}">
        @csrf
        @method('POST')
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email"  name="email" class="form-control w-50" value="{{old('email')}}">
          {{-- Error --}}
          @error('email')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
          </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password"  name="password" class="form-control w-50" value="{{old('password')}}">
            <p class="form-text">Most be 6 characters lenght</p>

            {{-- Error --}}
            @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>

        <button type="submit" class="btn btn-sm btn-primary">Login</button>
        {{-- <a href="/User/create" class="btn btn-sm btn-success">Register</a> --}}
        <a href="/Register" class="btn btn-sm btn-success">Register</a>
        <a href="/User" class="btn btn-sm btn-danger">Cancel</a>
    </form>
</div>
@endsection
