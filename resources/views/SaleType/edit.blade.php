{{-- @extends('layout') --}}

<x-layout pageTitle="Management">

    @section('main-content')

    <h1>Edit Sale Types</h1>

        <div class="container">
            <form method="post" action="{{route('SaleType.update', ['saletype'=>$saletype])}}">
                @method('PUT')
                @csrf
                <div class="mb-2 row">
                    <label for="saletypeId" class="form-control">ID</label>
                    <input type="number" name="saletypeId"  class="form-control" value="{{$saletype->saletypeId}}" disabled>
                </div>
                <div class="mb-2 row">
                    <label for="saletypeName" class="form-control">Name</label>
                    <input type="text" name="saletypeName" class="form-control" value="{{$saletype->saletypeName}}">
                    {{-- Error --}}
                    @error('saletypeName')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-2 row">
                    <label for="saletypeConditions" class="form-control">Conditions</label>
                    <textarea type="textarea" name="saletypeConditions" class="form-control" rows="5" cols="20">
                        {{$saletype->saletypeConditions}}
                    </textarea>
                    {{-- Error --}}
                    @error('saletypeConditions')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-2 d-flex justify-content-end">
                    <input type="submit" value="Save" class="btn btn-sm btn-primary">
                    <a href="/SaleType" class="btn btn-sm btn-danger">Cancel</a>
                </div>
            </form>

        </div>
    @endsection

</x-layout>
