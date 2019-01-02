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

            {{-- <div id="item-nav" class="mb-5">
                <div id="object-nav" role="navigation">
                    <ul>

                        @if(auth()->id() === $user->id)
                            <li id="activity-personal-li" class="current selected">
                                <a id="user-activity" href="{{url("/")}}">Activity</a>
                            </li>
                        @endif
                        <li id="xprofile-personal-li">
                            <a id="user-xprofile" href="{{$user->link}}/profile">Profile</a>
                        </li>
                        <li id="submissions-personal-li">
                            <a id="user-submissions" href="{{$user->link}}/submissions">Submissions</a>
                        </li>
                    </ul>
                </div>
            </div> --}}

                <div class="mt-5">
                    @yield("userContent")
                </div>
                
              </div>


       

        <div class="col-lg-3 col-md-3 col-sm-3 col-12 mt-5  ml-auto mx-auto text-center">


            <img src="{{ is_null($user->avatar) ? \Avatar::create($user->name)->setBackground('#f13544')->setBorder(0, '#aabbcc')->setFontSize(82)->setDimension(200)->toBase64() :  asset('img/avatars/'.$user->avatar) }}" class="img-fluid img-avatar" id="profilePicture" >
                
                @if(auth()->id() === $user->id)
                    <label class="custom-file  mt-2 mb-1">
                      <input type="file" id="userFile" name="userFile" class="custom-file-input" style="width:0px; height: 0px;">
                      <span class="custom-file-control btn btn-warning">Change Picture</span>
                    </label>
                @endif

       

            <h2 class="mt-2 red">{{ucwords($user->name)}}</h2>

            <hr>    
            <p>Member since {{$user->created_at->diffForHumans()}}</p>

            <h6>Total Posts: {{ $user->posts->count() }}</h6>
            <h6>Total Comments: {{ $user->comments->count()}}</h6>
        </div>

    </div>
</div>

@endsection

@auth

@section('footer')

<script>
    $(function(){

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });

       $("#userFile").change(function(){
            var myFormData = new FormData();
            myFormData.append('userFile', userFile.files[0]);
            $("#profilePicture").addClass("opacity-delete");
            $.ajax({
              url: '{{action("ProfileController@uploadFile")}}',
              type: 'POST',
              processData: false, // important
              contentType: false, // important
              dataType : 'json',
              data: myFormData,
                success: function(data)
                {
                    $("#profilePicture").removeClass("opacity-delete");
                    $("#profilePicture").attr('src',data.fileName);
                },
                error: function(data)
                {
                    
                    $("#profilePicture").removeClass("opacity-delete");
                    console.log(data);
                }
            });
       });
    });
</script>
@endsection

@endauth