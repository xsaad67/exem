
@extends("profiles.layouts.userMain")

@section("userContent")

    @foreach($comments as $comment)
        <div class="d-flex align-items-baseline">
            <div class="col-lg-2">
                <img src="{{$comment->user->dp}}" class="img-avatar">
            </div>
            <div class="col-lg-10">
                <p class="print-act"> <span class="red">You</span> commented  <span class="red">{{$comment->body}}</span> to <span class="red"><a href="{{$comment->post->link}}">{{$comment->post->title}}</a></span> at {{$comment->updated_at->diffForHumans()}}</p>
            </div>
        </div>
        <hr style="border-color: #ececec !important;">
    @endforeach

@endsection




      