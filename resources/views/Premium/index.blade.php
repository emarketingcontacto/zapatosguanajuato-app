<x-layout pageTitle="Pemium" pageDescription="Premium" keywords="Premium Index">
    @section('main-content')
        <div class="main-container">
            <h1>Clientes Premium</h1>
            <div class="w-25">
                <a href="{{route('Premium.create')}}" class="btn btn-sm btn-primary">Create</a>
            </div>

            <table class="w-100 table table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Producer</th>
                        <th>Category</th>
                        <th>Start</th>
                        <th>End</th>
                        <th>Management</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($premiums as $prem )
                        <tr>
                            <td>{{$prem->premiumId}}</td>
                            <td>{{$prem->bizName}}</td>
                            <td>{{$prem->bizcatName}}</td>
                            <td>{{$prem->premiumStart}}</td>
                            <td>{{$prem->premiumEnd}}</td>
                            <td>
                                {{-- show --}}
                                <a href="{{route('Premium.show', ['premium'=>$prem->premiumId])}}" class="btn btn-sm btn-primary">Ver</a>
                                {{-- edit --}}
                                <a href="{{route('Premium.edit', ['premium'=>$prem->premiumId])}}" class="btn btn-sm btn-primary">Edit</a>
                                {{-- delete --}}
                                {{-- <form action="{{route('Premium.delete', ['premium'=>$prem->premiumId])}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <input type="submit" value="Delete" class="btn btn-sm btn-danger">
                                </form> --}}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>


    @endsection
</x-layout>
