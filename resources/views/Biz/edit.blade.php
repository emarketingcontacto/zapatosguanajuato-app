<x-layout pageTitle="Management" pageDescription="Biz">

    @section('main-content')

    <h1>Create Biz</h1>

    <div class="container p-4 mb-5">
        <form action="{{route('Biz.update',[$biz])}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="row">
                <label for="bizId" class="form-control bg-light">ID</label>
                <input type="text" name="bizId" class="form-control" disabled value="{{$biz->bizId}}" >
            </div>

            <div class="row">
                <label for="bizName" class="form-control bg-light">Name</label>
                <input type="text" name="bizName" class="form-control" value="{{$biz->bizName}}">
                {{-- Error --}}
                @error('bizName')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="row">
                <label for="bizStreetNum" class="form-control bg-light">Street #</label>
                <input type="text" name="bizStreetNum" class="form-control" value="{{$biz->bizStreetNum}}">
                {{-- Error --}}
                @error('bizStreetNum')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="row">
                <label for="bizNeigborhood" class="form-control bg-light">Neighborhood</label>
                <input type="text" name="bizNeigborhood" class="form-control" value="{{$biz->bizNeigborhood}}" >
                {{-- Error --}}
                @error('bizNeigborhood')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="row">
                <label for="bizState" class="form-control bg-light">State</label>
                <input type="text" name="bizState" class="form-control" value="{{$biz->bizState}}" >
                {{-- Error --}}
                @error('bizState')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="row">
                <label for="bizCity" class="form-control bg-light">City</label>
                <input type="text" name="bizCity" class="form-control" value="{{$biz->bizCity}}">

                {{-- Error --}}
                @error('bizCity')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="row">
                <label for="bizTel" class="form-control bg-light">Tel</label>
                <input type="tel" name="bizTel" class="form-control" value="{{$biz->bizTel}}">
                {{-- Error --}}
                @error('bizTel')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="row">
                <label for="bizContact" class="form-control bg-light">Contact</label>
                <input type="text" name="bizContact" class="form-control" value="{{$biz->bizContact}}">
                {{-- Error --}}
                @error('bizContact')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="row">
                <label for="bizWhatsApp" class="form-control bg-light">WhatsApp</label>
                <input type="text" name="bizWhatsApp" class="form-control" value="{{$biz->bizWhatsApp}}">
                {{-- Error --}}
                @error('bizWhatsApp')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="row">
                <label for="bizFacebook" class="form-control bg-light">Facebook</label>
                <input type="text" name="bizFacebook" class="form-control" value="{{$biz->bizFacebook}}">
                {{-- Error --}}
                @error('bizFacebook')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="row">
                <label for="bizWeb" class="form-control bg-light">Website</label>
                <input type="text" name="bizWeb" class="form-control" value="{{$biz->bizWeb}}" >
                {{-- Error --}}
                @error('bizWeb')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="row">
                <label for="bizEmail" class="form-control bg-light">Email</label>
                <input type="email" name="bizEmail" class="form-control" value="{{$biz->bizEmail}}">
                {{-- Error --}}
                @error('bizEmail')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="row">
                <label for="bizImage" class="form-control bg-light">Image</label>
                <img src="{{asset('storage/'.$biz->bizImage)}}"  alt="{{'storage/biz'}}" width="600" height="600">
                <input type="file" name="bizImage" class="form-control" value="{{$biz->bizImage}}">
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
                        @if ($biz->bizcatId == $bizcategory->bizcatId)
                            <option value="{{$bizcategory->bizcatId}}" selected>{{$bizcategory->bizcatName}}</option>
                        @endif
                        <option value="{{$bizcategory->bizcatId}}"> {{$bizcategory->bizcatName}} </option>
                    @endforeach
                </select>
                {{-- Error --}}
                @error('bizcatId')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="row">
                <label for="modelcategories" class="form-control bg-light">Model Categories</label>
                <fieldset>
                    @foreach ($modelcategoriesall as $modelcategoryall)
                        <input type="checkbox" name="modelcatid[]" id="{{$modelcategoryall->modelcatName}}" value="{{$modelcategoryall->modelcatId}}">
                        <label for="modelcat">{{$modelcategoryall->modelcatName}}</label>
                    @endforeach
                </fieldset>
            </div>

            @foreach ($modelcategories as $modelcategory )
                @php
                    echo '<script>
                            var itemId ='@endphp {{$modelcategory->modelcatName}}
                @php echo 'getChekedItems(itemId)
                        </script>'
                @endphp
            @endforeach

            <div class="row">
                <label for="saletypeId" class="form-control bg-light">Sale Type</label>

                <select name="saletypeId" class="form-control dropdown w-100">
                    <option value="">--Please choose an option--</option>
                    @foreach ($saletypes as $saletype)
                        @if ($biz->saletypeId == $saletype->saletypeId)
                            <option value="{{$saletype->saletypeId}}" selected> {{$saletype->saletypeName}} </option>
                        @endif
                        <option value="{{$saletype->saletypeId}}"> {{$saletype->saletypeName}} </option>
                    @endforeach
                </select>
                {{-- Error --}}
                @error('saletypeId')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

                {{-- last visit --}}
                <div class="row">
                    <label for="bizLastvisit" class="form-control">Last Visit</label>
                    <input type="date" name="bizLastvisit" class="form-control" value="{{$biz->bizLastvisit}}">
                </div>

            <div class="d-flex flex-row p-3 justify-content-end gap-3" >
                <input type="submit" value="Update" class="btn btn-sm btn-primary">
                <a href="/Biz" class="btn btn-sm btn-danger">Cancel</a>
            </div>
        </form>
    </div>
    @endsection
</x-layout>
