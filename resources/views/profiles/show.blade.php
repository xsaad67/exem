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

            @if(session('success'))
                <div class="alert alert-success mt-2 mb-4 text-center">
                    {{session('success')}}
                </div>
            @endif
       

            @foreach($user->posts as $post)

                <div class="bb-post-collection hfeed post-list standard bb-thumbnail-stretched bb-media-playable">
                    <ul id="post-items" class="post-items">
                        <li class="post-item post-item-stream">
                            <article class="post">
                                <a href="{{$post->user->link}}">
                                    <img alt="{{ $post->user->name }}" src="{{ $post->user->dp }}" 
                                    class="avatar avatar-66 photo" height="66" width="66" itemprop="image">
                                </a>

                              
                                <span>
                                    Posted By <a href="{{$post->user->link}}">{{$post->user->name}}</a> at {{$post->created_at->diffForHumans()}}
                                </span>

                                @can('update', $post)
                                    <a class="float-right btn btn-danger ml-2" href="{{url('/post/delete/'.$post->id)}}">Delete Post</a>
                                    <a class="float-right btn btn-primary" href="{{url('/post/edit/'.$post->id)}}">Edit Post</a>
                                @endcan
                                <h2 class="entry-title">
                                    <a href="{{$post->link}}" rel="bookmark">{{$post->title}}</a>
                                </h2>
                                <div class="post-thumbnail">
                                    
                                    <a href="{{$post->link}}" title="{{$post->title}}">
                                        <div class="postBody">
                                            {!! truncate_html($post->description,300) !!} 
                                        </div>
                                    </a>
                                    
                                </div>

                                <footer class="entry-footer">
                                    <div class="bb-post-share-box">
                                        <div class="content has-share-buttons">
                                            <div class="bb-post-rating post-rating js-post-point" data-post_id="130">
                                                <div class="inner">
                                                    
                                                    <button class="point-btn upvote {{ $post->upvoters->contains('id',auth()->id()) ? 'upvoted' : ''}}"  data-id="{{$post->id}}" data-vote="{{encrypt($post->id)}}"> 
                                                        <i class="bb-icon bb-ui-icon-arrow-up"></i>
                                                    </button>
                                                    
                                                    <button class="downvote point-btn {{ $post->downvoters->contains('id',auth()->id()) ? 'downvoted' : ''}}" data-action="down" data-id="{{$post->id}}" data-vote="{{encrypt($post->id)}}"> 
                                                        <i class="bb-icon bb-ui-icon-arrow-down"></i> 
                                                    </button> 

                                                    <span class="count"> 
                                                         <span class="text" id="count{{$post->id}}" label="points">
                                                            {{$post->fakeUpVotes + count($post->upvoters)}}
                                                        </span> 
                                                    </span>

                                                </div>
                                            </div>
                                            
                                            <div class="post-meta bb-post-meta size-lg">
                                                <a href="{{$post->link}}/#comments" class="post-meta-item post-comments">
                                                    <i class="bb-icon bb-ui-icon-comment"></i>
                                                </a>
                                            </div>

                                            <div class="essb_links essb_counters essb_displayed_boombox essb_share essb_template_default4-retina essb_template_glow-retina essb_1179878203 essb_width_flex essb_links_center print-no">

                                                <ul class="essb_links_list">
                                                   
                                                    <li class="essb_item essb_link_facebook nolightbox"> 
                                                        <a href="https://www.facebook.com/sharer/sharer.php?u={{$post->link}}"  onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Facebook">
                                                            <span class="essb_icon essb_icon_facebook"></span>
                                                            <span class="essb_network_name">Facebook</span>
                                                        </a>
                                                    </li>
                                                    
                                                    <li class="essb_item essb_link_twitter nolightbox"> 
                                                        <a href="https://twitter.com/intent/tweet?text={{$post->description}}&url={{$post->link}}&counturl={{$post->link}}" title=""  target="_blank" rel="nofollow">
                                                            <span class="essb_icon essb_icon_twitter"></span>
                                                            <span class="essb_network_name">Twitter</span>
                                                        </a>
                                                    </li>
                                                </ul>

                                            </div>
                                          
                                            
                                        </div>
                                    </div>
                                </footer>
                            </article>
                        </li>
                    </ul>                 
                </div>
            @endforeach

        </div>

        <div class="col-lg-3 col-md-3 col-sm-3 col-12 mt-5  ml-auto mx-auto text-center">
            <img src="{{ is_null($user->avatar) ? \Avatar::create($user->name)->setBackground('#f13544')->setBorder(0, '#aabbcc')->setFontSize(82)->setDimension(200)->toBase64() :  asset('img/avatars/'.$user->avatar) }}" class="img-fluid img-avatar" >

            <h2 class="mt-2">{{ucwords($user->name)}}</h2>

            <hr>
            <p>Member since {{$user->created_at->diffForHumans()}}</p>

            <h6>Total Posts: {{$user->posts->count()}}</h6>
            <h6>Total Comments: {{ $user->comments->count()}}</h6>
        </div>

    </div>
</div>

@endsection