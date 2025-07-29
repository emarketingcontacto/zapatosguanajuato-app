<x-layout pageTitle="Pemium" pageDescription="Premium" keywords="Premium Show">

    @section('main-content')
        <div class="main-container">
            <h1>Premium Show</h1>

            <div class="container mb-5 w-50">
                <form action="{{route('Premium.store')}}" method="post">
                    @csrf
                    @method('POST')
                    <div class="row">
                        <label for="premiumId" class="form-control bg-light">Pemium Id</label>
                        <input type="text" name="premiumId" class="form-control" value="{{$premiumAll->premiumId}}">
                    </div>

                    <div class="row">
                        <label for="bizName" class="form-control">Productor</label>
                        <input type="text" name="bizName" class="form-control" value="{{$premiumAll->bizName}}">
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="bizcatId" class="form-control">CategoriaId</label>
                            <input type="text" name="bizcatId" value="{{$premiumAll->bizcatId}}" class="form-control">
                        </div>
                        <div class="col">
                            <label for="bizcatName" class="form-control">CategoriaName</label>
                            <input type="text" name="bizcatName" class="form-control" value="{{$premiumAll->bizcatName}}">
                        </div>
                    </div>

                    <div class="row">
                        <label for="premiumStart" class="form-control">Start</label>
                        <input type="date" class="form-control" value="{{$premiumAll->premiumStart}}" name="premiumStart">
                    </div>

                    <div class="row">
                        <label for="premiumEnd" class="form-control">End</label>
                        <input type="date" class="form-control" value="{{$premiumAll->premiumEnd}}" name="premiumEnd">
                    </div>

                    {{-- control  --}}
                    <div class="d-flex flex-row p-3 justify-content-end gap-3">
                        <a href="{{route('Premium.edit', [$premiumAll->premiumId])}}" class="btn btn-sm btn-success">Editar</a>
                        <a href="{{route('Premium.index')}}" class="btn btn-sm btn-primary">Cancel</a>
                    </div>
                </form>

            </div>

        </div>
    @endsection
</x-layout>
