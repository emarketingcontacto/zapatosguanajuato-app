<x-layout pageTitle="Management" pageDescription="Modelo" keywords="Modelo-index">

@section('main-content')
<div class="container m-4">
    <h1>Modelos</h1>
    {{-- create --}}
    <a href="{{route('Modelo.create')}}" class="btn btn-sm btn-primary">Create</a>
    <hr>
    {{-- succes Message --}}
    @if (session()->has('success'))
    <div id="success" class="alert alert-success">
        {{session('success')}}
    </div>
    @endif
    <table class="table-striped w-100" >
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Material</th>
                <th>Price</th>
                <th>Image</th>
                <th>Biz</th>
                <th>Seasson</th>
                <th>SubCategory</th>
                <th>Category</th>
                <th>Management</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                @foreach ($modelos as $modelo)
                <td>{{$modelo->modelId}}</td>
                <td>{{$modelo->modelName}}</td>
                <td>{{$modelo->materialName}}</td>
                <td>{{$modelo->modelPrice}}</td>
                <td>{{$modelo->modelImage}}</td>
                <td>{{$modelo->bizName}}</td>
                <td>{{$modelo->seassonName}}</td>
                <td>{{$modelo->modelsubcatName}}</td>
                <td>{{$modelo->modelcatName}}</td>
                <td class="d-flex">
                    {{-- edit --}}
                        <a href="{{route('Modelo.edit',['modelo'=>$modelo->modelId])}}" class="btn btn-sm btn-primary">Edit</a>
                    {{-- delete --}}
                    <form action="{{route('Modelo.destroy',['modelo'=>$modelo->modelId])}}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete" class="btn btn-sm btn-danger mx-2">
                        </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div class="mb-4 pb-4">
    {{$modelos->links()}}
</div>

@endsection

</x-layout>
