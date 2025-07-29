<x-layout pageTitle="Pemium -Create" pageDescription="Premium-Create" keywords="Premium Create">
    @section('main-content')
        <div class="main-container">
            <h1>Crear Clientes Premium</h1>

            <div class="container mb-5 w-50">
                <form action="{{route('Premium.store')}}" method="post">
                    @csrf
                    @method('POST')
                    <div class="row">
                        <label for="premiumId" class="form-control bg-light">Pemium Id</label>
                        <input type="text" name="premiumId" class="form-control" disabled>
                        {{--error --}}
                        {{-- @error('premiumId')
                            <div class="alert alert-danger">{{ $message}}</div>
                        @enderror --}}
                    </div>

                    <div class="row">
                        <label for="bizName" class="form-control">Productor</label>
                        <select name="bizId" id="selectBizId" class="form-control dropdown w-100" onchange=getBizCat()>
                            <option value="">--Select an option--</option>
                            @foreach ($bizness as $biz)
                                <option value="{{$biz->bizId}}">{{$biz->bizName}}</option>
                            @endforeach
                        {{--error --}}
                        @error('bizId')
                            <div class="alert alert-danger">{{ $message}}</div>
                        @enderror
                        </select>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="bizcatId" class="form-control">CategoriaId</label>
                            <input type="text" name="bizcatId" id="bizcatId" class="form-control">
                                {{--error --}}
                                @error('bizcatId')
                                    <div class="alert alert-danger">{{ $message}}</div>
                                @enderror
                        </div>
                        <div class="col">
                            <label for="bizcatName" class="form-control">CategoriaName</label>
                            <input type="text" name="bizcatName" id="bizcatName" class="form-control">
                        </div>
                    </div>

                    <div class="row">
                        <label for="premiumStart" class="form-control">Start</label>
                        <input type="date" class="form-control" value="{{old('premiumStart')}}" name="premiumStart">
                        {{--error --}}
                        @error('premiumStart')
                            <div class="alert alert-danger">{{ $message}}</div>
                        @enderror
                    </div>

                    <div class="row">
                        <label for="premiumEnd" class="form-control">End</label>
                        <input type="date" class="form-control" value="{{old('premiumEnd')}}" name="premiumEnd">
                        {{--error --}}
                        @error('premiumEnd')
                            <div class="alert alert-danger">{{ $message}}</div>
                        @enderror
                    </div>

                    {{-- control  --}}
                    <div class="d-flex flex-row p-3 justify-content-end gap-3">
                        <input type="submit" value="Create" class="btn btn-sm btn-primary">
                        <a href="{{route('Premium.index')}}" class="btn btn-sm btn-danger">Cancel</a>
                    </div>
                </form>

            </div>
        </div>


    @endsection
</x-layout>
