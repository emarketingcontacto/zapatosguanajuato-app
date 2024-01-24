@extends('layout')

@section('main-content')

<div class="header-Category" style="background-image: url('{{asset('storage/'.$bizcat->bizcatImage)}}');">
    <p>Fabricantes</p>
</div>

<div class="container m-4 d-flex gap-3 pb-5">
    @foreach ($business as $biz)

        <div class="card" style="width: 18rem; background-color:#F5F5F5">
            <img src="{{asset('storage/'.$biz->bizImage)}}" class="card-img-top">
            <h5 class="card-title">{{$biz->bizName}}</h5>
            <div class="card-body card-text">
                <div class="row">
                    <div class="col col-3">
                        <span class="material-symbols-outlined">trolley</span>
                    </div>
                    <div class="col">
                        <span>{{$biz->saletypeName}}</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-3">
                        <span class="material-symbols-outlined">support_agent</span>
                    </div>
                    <div class="col">
                        <span>{{$biz->bizContact}}</span>
                    </div>
                </div>


                <div class="row">
                    <div class="col col-3">
                        <span class="material-symbols-outlined">send_to_mobile</span>
                    </div>
                    <div class="col">
                        <span>{{$biz->bizTel}}</span>
                    </div>
                </div>

                <div class="row">
                    <div class="col col-3">
                        <span class="material-symbols-outlined">map</span>
                    </div>
                    <div class="col">
                        <span>{{$biz->bizCity}}</span>
                    </div>
                </div>


                <hr>
                <a href="{{route('Biz.show', ['biz'=>$biz->bizId])}}" class="btn btn-sm btn-show form-control">
                    <span class="material-symbols-outlined">info</span>
                    <span class="pb-1">Detalles...</span>
                </a>
            </div>
        </div>

    @endforeach
</div>

@endsection
