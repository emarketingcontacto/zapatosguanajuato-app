{{-- @extends('layout') --}}
<x-layout pageTitle="Management">

    @section('main-content')
        <h1>Edit Seasson</h1>
        <div class="container">
            <form method="POST" action="{{route('Seasson.update',['seasson' => $Seasson])}}">
                @csrf
                @method('put')
                <div class="mb-3">
                <label for="seassonId" class="form-label">ID</label>
                <input type="number" name="seassonId" id="seassonId" class="form-control w-25" disabled value="{{$Seasson->seassonId}}">
                </div>
                <div class="mb-3">
                <label for="seassonName" class="form-label">Name</label>
                <input type="text"  name="seassonName" class="form-control w-50" value="{{$Seasson->seassonName}}"">
                {{-- Error --}}
                @error('seassonName')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
                <div class="mb-3">
                    <label for="seassonStart" class="form-label">Start Date</label>
                    <input type="date"  name="seassonStart" class="form-control w-50" value="{{$Seasson->seassonStart}}"">
                {{-- Error --}}
                @error('seassonStart')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
                <div class="mb-3">
                    <label for="seassonEnd" class="form-label">Start End</label>
                    <input type="date"  name="seassonEnd" class="form-control w-50" value="{{$Seasson->seassonEnd}}"">
                {{-- Error --}}
                @error('seassonEnd')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
                <button type="submit" class="btn btn-sm btn-primary">Save</button>
                <a href="/Seasson" class="btn btn-sm btn-danger">Cancel</a>
            </form>
        </div>
    @endsection

</x-layout>
