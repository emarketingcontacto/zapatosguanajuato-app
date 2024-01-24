@extends('layout')

@section('main-content')
<h1 class="text-center"> Create user</h1>
<div class="container d-flex justify-content-center align-items-center m-5">
    <form method="POST" class="w-75" action="{{route('User.store')}}">
        @csrf
        @method('POST')
        <div class="mb-3">
          <label for="id" class="form-label">ID</label>
          <input type="number" name="id" class="form-control w-25" disabled>
        </div>

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text"  name="name" class="form-control w-50" value={{old('name')}}>
            <p class="form-text">Most be 3 characters lenght</p>
          {{-- Error --}}
          @error('name')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
          </div>

          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email"  name="email" class="form-control w-50" value={{old('email')}}>
          {{-- Error --}}
          @error('email')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
          </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password"  name="password" class="form-control w-50" value={{old('password')}}>
            <p class="form-text">Most be 6 characters lenght</p>

            {{-- Error --}}
            @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>

          <div class="mb-3">
            <label for="password_confirmation" class="form-label">Password Confirmation</label>
            <input type="password"  name="password_confirmation" class="form-control w-50">
            <p class="form-text">Most be 6 characters lenght</p>

            {{-- Error --}}
            @error('password_confirmation')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>

        <button type="submit" class="btn btn-sm btn-primary">Save</button>
        <a href="/User/login" class="btn btn-sm btn-success">Login</a>
        <a href="/User" class="btn btn-sm btn-danger">Cancel</a>
    </form>
</div>

@endsection
