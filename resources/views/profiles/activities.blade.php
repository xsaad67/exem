@extends('layouts.main')


@section('css')

<style>
#object-nav > ul{
    display:block;
   list-style:none;

    overflow: visible;
    border-bottom: 2px solid #ececec;
}
#object-nav > ul > li{
    color: inherit;
    font-size: 14px;
    font-weight: 700;
    line-height: 18px;
    text-transform: uppercase;
    text-decoration: none;
    display: inline-block;
    padding: 15px 13px;
    background: 0 0;
    text-align: center;
    white-space: nowrap;

}

#object-nav > ul > li > a:hover{
    color:#000;
    font-size:16px;
}
#object-nav > ul > li.current >a{
    color:#000;
    font-size:16px;
}

.activity-wrap {
    display: table;
    table-layout: fixed;
    width: 100%;
}

.img-avatar {
    width: 66px;
    height: 66px;
    border-radius: 50%;
    display: inline-block;
}

.print-act{
    font-size:20px;
    font-weight: 600;
}
.red{
    color: #f13544;
}

</style>
@endsection

@section('content')


<div class="container">
    <div class="row">

        <div class="col-lg-7 col-md-7 col-sm-7 offset-lg-1 col-12 mt-5">

            <div id="item-nav" class="mb-5">
                <div id="object-nav" role="navigation">
                    <ul>
                        <li id="activity-personal-li" class="current selected">
                            <a id="user-activity" href="https://boombox.px-lab.com/another-gag/members/kathynewman/activity/">Activity</a>
                        </li>
                        <li id="xprofile-personal-li">
                            <a id="user-xprofile" href="https://boombox.px-lab.com/another-gag/members/kathynewman/profile/"><i>"\f007"</i>Profile</a>
                        </li>
                        <li id="submissions-personal-li">
                            <a id="user-submissions" href="https://boombox.px-lab.com/another-gag/members/kathynewman/submissions/">Submissions</a>
                        </li>
                    </ul>
                </div>
            </div>

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


        </div>


       

        

        <div class="col-lg-3 col-md-3 col-sm-3 col-12 mt-5  ml-auto mx-auto text-center">
            <img src="{{ is_null($user->avatar) ? \Avatar::create($user->name)->setBackground('#f13544')->setBorder(0, '#aabbcc')->setFontSize(82)->setDimension(200)->toBase64() :  asset('img/avatars/'.$user->avatar) }}" class="img-fluid img-avatar" >

            <h2 class="mt-2 red">{{ucwords($user->name)}}</h2>

            <hr>
            <p>Member since {{$user->created_at->diffForHumans()}}</p>

            <h6>Total Posts: {{ $user->posts->count() }}</h6>
            <h6>Total Comments: {{ $user->comments->count()}}</h6>
        </div>

    </div>
</div>

@endsection