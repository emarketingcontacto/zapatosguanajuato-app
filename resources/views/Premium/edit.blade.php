<x-layout pageTitle="Pemium" pageDescription="Premium" keywords="Premium Edit">
    @section('main-content')
        <div class="main-container">
            <h1>Edit Premium</h1>

            <div class="container mb-5 w-50">
                <form method="post" action="{{route('Premium.update',['premium'=> $premiumAll->premiumId])}}" >
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col">
                            <label for="premiumId" class="form-control bg-light">Pemium Id</label>
                            <input type="text" name="premiumId" class="form-control" value="{{$premiumAll->premiumId}}" disabled>
                            {{--error --}}
                            @error('premiumId')
                            <div class="alert alert-danger">{{ $message}}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="bizId" class="form-control">Productor Id</label>
                            <input type="text" name="bizId" id="bizId" class="form-control" value="{{$premiumAll->bizId}}">
                            {{--error --}}
                            @error('bizId')
                                <div class="alert alert-danger">{{ $message}}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="bizName" class="form-control">Productor Name</label>
                            <input type="text" name="bizName" id="bizName" class="form-control" value="{{$premiumAll->bizName}}" disabled>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="bizcatId" class="form-control">Categoria Id</label>
                            <input type="text" name="bizcatId" id="bizcatId" class="form-control" value={{$premiumAll->bizcatId}} disabled>
                        </div>
                        <div class="col">
                            <label for="bizcatName" class="form-control">CategoriaName</label>
                            <input type="text" name="bizcatName" id="bizcatName" class="form-control" value="{{$premiumAll->bizcatName}}" disabled>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="premiumStart" class="form-control">Start</label>
                            <input type="date" class="form-control" value="{{$premiumAll->premiumStart}}" name="premiumStart">
                            {{--error --}}
                            @error('premiumStart')
                                <div class="alert alert-danger">{{ $message}}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="premiumEnd" class="form-control">End</label>
                            <input type="date" class="form-control" value="{{$premiumAll->premiumEnd}}" name="premiumEnd" >
                            {{--error --}}
                            @error('premiumEnd')
                                <div class="alert alert-danger">{{ $message}}</div>
                            @enderror
                        </div>
                    </div>
                    {{-- control  --}}
                    <div class="d-flex flex-row p-3 justify-content-end gap-3">
                        <input type="submit" value="Update" class="btn btn-sm btn-success">
                </form>
                        <form action="{{route('Premium.destroy', ['premium'=>$premiumAll->premiumId])}}" method="post" onsubmit=" return confirm('Are you sure?')">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete" class="btn btn-sm btn-danger mx-2">
                        </form>
                        <a href="{{route('Premium.index')}}" class="btn btn-sm btn-primary">Cancel</a>
                    </div>
            </div>
        </div>
    @endsection
</x-layout>
