<x-layout pageTitle="Management" pageDescription="SaleType">

    @section('main-content')

    <div class="container">
    <h1>Sale Type</h1>
    <a href="{{route('SaleType.create')}}" class="btn btn-sm btn-primary">Create</a>
    <hr class="w-100">
    @if (session()->has('success'))
    <div id="success" class="alert alert-success">
        {{session('success')}}
    </div>
    @endif
        <table class="table table-striped w-100">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Conditions</th>
                    <th>Manager</th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $saletypes as $saletype )
                    <tr>
                        <td>{{$saletype ['saletypeId']}}</td>
                        <td>{{$saletype ['saletypeName']}}</td>
                        <td>{{$saletype['saletypeConditions']}}</td>
                        <td class="management">
                            <div class="d-flex">
                                {{-- Update --}}
                                <a href="{{route('SaleType.edit', ['saletype' => $saletype])}}" class="btn btn-sm btn-primary">Edit</a>
                                {{-- delete --}}
                            <form action="{{route('SaleType.destroy', ['saletype' => $saletype])}}" method="post">
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
