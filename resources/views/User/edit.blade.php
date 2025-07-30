<x-layout pageTitle="Management" pageDescription="Users" keywords="User Edit">

    @section('main-content')
    <h1>Edit User</h1>
    <div class="container p-5">
        <form action="{{route('User.update', ['user'=>$user])}}" method="post">
            @csrf
            @method('PUT')
            {{-- id --}}
            <div class="mb-3">
                <label for="userId" class="form-label">ID</label>
                <input type="number" name="userId" class="form-control w-25" value="{{$user->id}}" disabled>
            </div>
            {{-- name --}}
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control w-25" value="{{$user->name}}" >
                {{-- Error --}}
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            {{-- email --}}
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control w-25" value="{{$user->email}}" disabled >
                {{-- Error --}}
                @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            {{-- password --}}
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control w-25" >
                <p class="form-text">Most be 6 characters lenght</p>
                {{-- Error --}}
                @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            {{-- password confirmation --}}
            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Password Confirmation</label>
                <input type="password"  name="password_confirmation" class="form-control w-25">
                <p class="form-text">Most be 6 characters lenght</p>
                {{-- Error --}}
                @error('password_confirmation')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            {{-- created at --}}
            <div class="mb-3">
                <label for="created_at" class="form-label">Created </label>
                <input type="datetime" name="created_at" class="form-control w-25" value="{{$user->created_at}}" disabled>
            </div>
            {{-- updated at --}}
            <div class="mb-3">
                <label for="updated_at" class="form-label">Last Update </label>
                <input type="datetime" name="updated_at" class="form-control w-25" value="{{$user->updated_at}}" disabled>
            </div>
            {{-- submit --}}
            <div class="mb-3">
                <input type="submit" value="Save" class="btn btn-sm btn-success">
                <a href="/User" class="btn btn-sm btn-danger">Cancel</a>
            </div>
        </form>
    </div>
    @endsection

</x-layout>
