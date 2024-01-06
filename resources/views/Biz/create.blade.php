@extends('layout')

@section('main-content')

<h1>Create Biz</h1>

<div class="container mb-5">
    <form action="{{route('Biz.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('POST')

        <div class="row">
            <label for="bizId" class="form-control bg-light">ID</label>
            <input type="text" name="bizId" class="form-control" disabled>
        </div>

        <div class="row">
            <label for="bizName" class="form-control bg-light">Name</label>
            <input type="text" name="bizName" class="form-control">
            {{-- Error --}}
            @error('bizName')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

        </div>

        <div class="row">
            <label for="bizStreetNum" class="form-control bg-light">Street #</label>
            <input type="text" name="bizStreetNum" class="form-control">
            {{-- Error --}}
            @error('bizStreetNum')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="row">
            <label for="bizNeigborhood" class="form-control bg-light">Neighborhood</label>
            <input type="text" name="bizNeigborhood" class="form-control">
            {{-- Error --}}
            @error('bizNeigborhood')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="row">
            <label for="bizState" class="form-control bg-light">State</label>
            <input type="text" name="bizState" class="form-control">

            {{-- Error --}}
            @error('bizState')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

        </div>

        <div class="row">
            <label for="bizCity" class="form-control bg-light">City</label>
            <input type="text" name="bizCity" class="form-control">

            {{-- Error --}}
            @error('bizCity')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

        </div>

        <div class="row">
            <label for="bizTel" class="form-control bg-light">Tel</label>
            <input type="tel" name="bizTel" class="form-control">

            {{-- Error --}}
            @error('bizTel')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="row">
            <label for="bizContact" class="form-control bg-light">Contact</label>
            <input type="text" name="bizContact" class="form-control">
            {{-- Error --}}
            @error('bizContact')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="row">
            <label for="bizWhatsApp" class="form-control bg-light">WhatsApp</label>
            <input type="text" name="bizWhatsApp" class="form-control">
            {{-- Error --}}
            @error('bizWhatsApp')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="row">
            <label for="bizFacebook" class="form-control bg-light">Facebook</label>
            <input type="text" name="bizFacebook" class="form-control">
            {{-- Error --}}
            @error('bizFacebook')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="row">
            <label for="bizWeb" class="form-control bg-light">Website</label>
            <input type="text" name="bizWeb" class="form-control">
            {{-- Error --}}
            @error('bizWeb')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="row">
            <label for="bizEmail" class="form-control bg-light">Email</label>
            <input type="email" name="bizEmail" class="form-control">
            {{-- Error --}}
            @error('bizEmail')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="row">
            <label for="bizImage" class="form-control bg-light">Image</label>
            <input type="file" name="bizImage" class="form-control">
            {{-- Error --}}
            @error('bizImage')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="row">
            <label for="bizcatId" class="form-control bg-light">BizcatID</label>
            <select name="bizcatId" class="form-control dropdown w-100">
                <option value="">--Please choose an option--</option>
                @foreach ($bizcategories as $bizcategory)
                    <option value="{{$bizcategory->bizcatId}}"> {{$bizcategory->bizcatName}} </option>
                @endforeach
            </select>
            {{-- Error --}}
            @error('bizcatId')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="row">
            <label for="saletypeId" class="form-control bg-light">Sale Type</label>

            <select name="saletypeId" class="form-control dropdown w-100">
                <option value="">--Please choose an option--</option>
                @foreach ($saletypes as $saletype)
                    <option value="{{$saletype->saletypeId}}"> {{$saletype->saletypeName}} </option>
                @endforeach
            </select>
            {{-- Error --}}
            @error('saletypeId')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="d-flex flex-row p-3 justify-content-end" >
            <input type="submit" value="Create" class="btn btn-sm btn-primary">
            <a href="/Biz" class="btn btn-sm btn-danger">Cancel</a>
        </div>


    </form>
</div>

@endsection
