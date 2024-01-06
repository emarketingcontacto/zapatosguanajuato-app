@extends('layout')

@section('main-content')

<div class="header-Category" style="background-image: url('{{asset('storage/'.$bizcat->bizcatImage)}}');">
    <p>Minoristas</p>
</div>

<div class="container m-4 d-flex gap-3">
    @foreach ($business as $biz)
    <div class="card" style="width: 18rem;">
        <img src="{{asset('storage/'.$biz->bizImage)}}" class="card-img-top">
        <h5 class="card-title">{{$biz->bizName}}</h5>
        <div class="card-body">
        <p class="card-text">{{$biz->bizStreetNum}}</p>
        <p class="card-text">{{$biz->bizCity}},{{$biz->bizState}}</p>
        <p class="card-text"></p>
        <p class="card-text">{{$biz->bizTel}}</p>
        {{-- Details --}}
        <a href="{{route('Biz.show', ['biz'=>$biz->bizId])}}" class="btn btn-sm btn-show form-control">Details</a>
    </div>
</div>

    @endforeach
</div>
@endsection
