{{-- @extends('layout') --}}
<x-layout pageTitle="Manager">

    @section('main-content')
    <h1>Biz</h1>
    <div class="container-fluid w-100">
        <a href="{{route('Biz.create')}}" class="btn-btn-sm btn-primary p-2">Create</a>

        <hr class="w-100">

        <table class="w-100 table table-striped">
            <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>City</th>
                <th>Telephone</th>
                <th>Contact</th>
                <th>Image</th>
                <th>BizCat</th>
                <th>SaleType</th>
                <th>Last Visit</th>
                <th>Management</th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $bisness as $biz )
                <tr>
                    <td>{{$biz->bizId}}</td>
                    <td>{{$biz->bizName}}</td>
                    <td>{{$biz->bizCity}}</td>
                    <td>{{$biz->bizTel}}</td>
                    <td>{{$biz->bizContact}}</td>
                    <td>{{$biz->bizImage}}</td>
                    <td>{{$biz->bizcatName}}</td>
                    <td>{{$biz->saletypeName}}</td>
                    <td>{{$biz->bizLastvisit}}</td>

                    <td class="d-flex justify-content-around gap-1">

                    {{-- show --}}
                    <a href="{{route('Biz.show', ['biz'=>$biz->bizId])}}" class="btn btn-sm btn-primary">Ver</a>

                    {{-- edit --}}
                    <a href="{{route('Biz.edit', ['biz'=>$biz->bizId])}}" class="btn btn-sm btn-primary">Edit</a>

                    {{-- delete --}}
                    <form action="{{route('Biz.destroy', ['biz'=>$biz->bizId])}}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete" class="btn btn-sm btn-danger">
                    </form>

                    </td>
                </tr>
            @endforeach
        </tbody>
        </table>
    </div>
    @endsection

</x-layout>
