<x-layout pageTitle="Management" pageDescription="BizCategory" keywords="BizCategory-Index">

    @section('main-content')

    <h1>Biz Categories</h1>
    <div class="container">
        <a href="{{route('BizCategory.create')}}" class="btn btn-sm btn-primary">Create</a>
        <hr class="w-50">

        @if (session()->has('success'))
        <div id="success" class="alert alert-success">
            {{session('success')}}
        </div>

        @endif

        <table class="table table-striped w-50">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Manager</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($Bizcategories as $bizcategory )
                <tr>
                    <td>{{$bizcategory['bizcatId']}}</td>
                    <td>{{$bizcategory['bizcatName']}}</td>
                    <td>{{$bizcategory['bizcatImage']}}</td>

                    <td>
                        <div class="d-flex">
                        <a href="{{route('BizCategory.edit',['bizcategory'=>$bizcategory->bizcatId])}}" class="btn btn-sm btn-primary">Edit</a>
                        <form action="{{route('BizCategory.destroy',['bizcategory'=>$bizcategory])}}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete" class="btn btn-sm btn-danger mx-2">
                        </form>
                    </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endsection
</x-layout>
