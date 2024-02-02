{{-- likes Count --}}
@php
     $likesCount = DB::table('likes')
        ->select(DB::raw('count(*) as countlikes'))
        ->where('bizId','=',$bizID)
        ->first();
@endphp
{{-- end likes Count --}}


{{-- user like this biz --}}
@php
    $userliked;
    $likeID;
    $userLikeit = DB::table('likes')
    ->select('userId', 'likeId')
    ->where('userId', '=', auth()->user()->id)
    ->where('bizId', '=', $bizID)
    ->first();
@endphp

@if ($userLikeit === null)
    @php
        $userliked = 0;
        $likeID = 0;
    @endphp
@else
    @php
        $userliked = 1;
        $likeID = $userLikeit->likeId;
    @endphp
@endif
{{-- user like this biz --}}

{{-- component Likes  --}}
<div class="likes bg-light d-flex gap-2 m-3 align-items-center pointer"
    id="likesDiv"
    data-userid="{{auth()->user()->id}}"
    data-bizid="{{$bizID}}"
    data-userlikeit="{{$userliked}}"
    data-likeid = "{{$likeID}}"
    onclick="checkLikes(event)"
    >
    <span id="heart" class="material-symbols-outlined" @php echo ($userliked != 0 ) ? "style=color:red" :"style=color:#cecece"; @endphp>favorite</span>
    <span id="countLikes">({{$likesCount->countlikes}})</span>
</div>
