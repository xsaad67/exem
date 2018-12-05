@extends('layouts.main')


@section('css')

<link rel="stylesheet" type="text/css" href="{{asset('css/buddypress.min.css')}}">

@endsection

@section('content')


<div id="buddypress" class="bbp-no-cover-img">
    <div class="bbp-wrapper">
        <div id="item-header" role="complementary">
            <div id="cover-image-container">
                <a id="header-cover-image" href="https://boombox.px-lab.com/another-gag/members/jefferylowe/"></a>
            </div>
        </div>
        <div class="bbp-container clearfix">
            <div class="bbp-item-sidebar">
                <div id="item-header-cover-image">
                    <div id="item-header-avatar">
                        <a href="{{$user->link}}" class="item-header-avatar-link">
                            <img src="{{$user->dp}}" class="avatar user-27-avatar avatar-186 photo" width="186" height="186" alt="Profile picture of {{$user->name}}"> 
                        </a>
                       
                    </div>
                    <div id="item-header-content">
                        <div class="bbp-item-info"> 
                            <span class="member-name">{{$user->name}}</span>
                            <h2 class="user-nicename">{{"@".strstr($user->email, '@', true) }}</h2></div>
                        <div class="bbp-user-report">
                            <p class="user-registered text-center">Member since {{$user->created_at->format('M d, Y')}}</p>
                            <div class="user-totals">
                                <div class="row"> <span class="col total-label text-center">Total Posts: {{count($user->posts) }}</span> 
                            </div>
                            </div>
                        </div>
                      
                        <div id="item-meta"></div>
                        <div id="item-buttons" class="bbp-item-buttons"></div>
                    </div>
                </div>
            </div>
            <div class="bbp-item-content">
                
                <div id="item-body">
                 
                   
                <div class="container main-container bb-stream">
                    <div class="bb-row">
                        <div class="bb-col col-content">
                            <div class="bb-row">
                                    <div class="site-main" role="main">
                                        <h1 style="margin-bottom:75px;">All posts by <a href="{{$user->link}}" style="color: #f43547;">{{$user->name}}</a></h1>
                                        <div class="infinite-scroll">

                                            @foreach($user->posts as $post)

                                                <div class="bb-post-collection hfeed post-list standard bb-thumbnail-stretched bb-media-playable">
                                                    <ul id="post-items" class="post-items">
                                                        <li class="post-item post-item-stream">
                                                            <article class="post">
                                                                 
                                                                <h2 class="entry-title">
                                                                    <a href="{{$post->link}}" rel="bookmark">{{ $post->title }}</a>
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

                                                                                        {{--  --}}
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
                                                                                <a href="{{$post->link}}#comments" class="post-meta-item post-comments">
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
                                                                                        <a href="https://twitter.com/intent/tweet?text={{ $post->description }}&url={{ $post->link }}&counturl={{ $post->link }}" title=""  target="_blank" rel="nofollow">
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                </div>
            </div>
        </div>
    </div>
</div>



@endsection