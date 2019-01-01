
@extends("profiles.layouts.userMain")

@section("userContent")

    @foreach($activities as $activity)
        <div class="d-flex align-items-baseline">
            <div class="col-lg-2">
                <img src="{{$user->dp}}" class="img-avatar">
            </div>
            <div class="col-lg-10">
                <p class="print-act"> <span class="red">{{$user->name}}</span> {{$activity->description}} a <span class="red">{{class_basename($activity->subject_type)}}</span> at {{$activity->updated_at->diffForHumans()}}</p>
            </div>
        </div>
        <hr style="border-color: #ececec !important;">
    @endforeach

@endsection




      