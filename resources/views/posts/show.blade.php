@extends('posts.layouts.main')

@section('css')

<style>
    textarea:focus{
        border:2px dashed #ccc;
    }
    .ajaxErrors{
        margin-top:15px;
        margin-bottom:15px;
    }
    .hide{
        display:none;
    }

    .show{
        display:block;
    }
</style>

@endsection



@section('postcontent')


    <div class="s-post-main mb-md bb-mb-el bb-card-item">
                <header class="entry-header s-post-header bb-mb-el">
                    <h1 class="entry-title s-post-title bb-mb-el" itemprop="headline">{{$post->title}}</h1>                   
                </header>
                
                <div class="s-post-meta-block bb-mb-el">

                    <div class="post-meta-content row">
                      
                        <div class="col-8">
                            <div class="author-avatar">
                                <a href="{{$post->user->link}}">
                                    <img alt="{{ $post->user->name }}" src="{{ $post->user->dp }}" 
                                    class="avatar avatar-66 photo" height="35" width="35" itemprop="image" style="border-radius: 50%;">
                                </a>
                                <span class="auth-name"> 
                                    <a class="auth-url" href="{{ $post->user->link }}" itemprop="url"> 
                                        <span itemprop="name">{{$post->user->name}}</span> 
                                    </a>
                                </span>

                                <button type="button" class="btn btn-primary ml-4">Follow</button> 
                            </div>
                           
                        </div>

                        <div class="col-4">
                            <div class="cl-reddish">
                                <span class="bb-icon bb-ui-icon-trending-eye"></span>
                                <span class="count">{{$post->visitors}}</span>
                                <span class="txt">{{str_plural('view',$post->visitors)}}</span>
                            </div>
                        </div>
                    </div>

                </div>


                
                <div class="bb-post-share-box s-post-share-box top bb-mb-el">
                    <div class="content has-share-buttons">
                        <div class="bb-post-rating post-rating js-post-point">
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
                                        <a href="https://twitter.com/intent/tweet?text={{$post->description}}&url={{$post->link}}&counturl={{$post->link}}" title=""  target="_blank" rel="nofollow">
                                            <span class="essb_icon essb_icon_twitter"></span>
                                            <span class="essb_network_name">twitter</span>
                                        </a>
                                    </li>
                                </ul>

                            </div>
                    </div>
                </div>

                    {!! $post->description !!}
              

                <div class="bb-tags mb-md bb-mb-el" itemprop="keywords">
                    <a href="{{$post->category->link}}" rel="tag">{{$post->category->name}}</a>
                </div>
    </div>


    <section id="boombox_comments" class="bb-comments bb-card-item s-post-small-el mb-md bb-mb-el">
            <div id="comments">
                <h2 class="comments-title">Comments</h2>

                

                @auth
                    <form method = "POST" action="{{action('CommentController@store')}}">
                        @csrf
                        <textarea name="comment" placeholder="Post Your Comment" id="postComment" class="col-12"></textarea>
                        <input type="hidden" value="{{encrypt($post->id)}}" name="post" id="commentPostId">
                        <div class="col-12">
                            <div class="float-right">
                                <button type="button" classs="btn create-post" id="create-comment" style="background:red; margin-top:5px;">Comment</button>
                            </div>
                        </div>
                       
                    </form>

                @else

                    <div id="respond" class="comment-respond">
                        <p class="must-log-in">You must be <a href="/login">logged in</a> to post a comment.</p>
                    </div>

                @endauth

                <div class="clearfix"></div>
                
                {{-- <div id="disqus_thread"></div> --}}

                <div class="comments">
                    <img class="center-block hide" id="loadingComment" src="/images/loader.gif" alt="Loading..." />
                    <div id="comment-errors" class="ajaxErrors"></div>
                    @foreach($post->comments as $comment)
                        @include('comments.show')
                    @endforeach
                </div>

            </div>
    </section>
     

     

@endsection

@section('footer')
    <script src="{{asset('js/admin-ajax.js')}}"></script>
    
    <script>

        $(function(){
            var commentUrl = "{{action('CommentController@store')}}";



            $("#create-comment").click(function(){
                
              
                var comment = $("#postComment").val();
                var postId = $("#commentPostId").val();
                $("#loadingComment").removeClass("hide");

                  $.ajax({
                    type:'POST',
                    url:commentUrl,
                    data:{ post: postId, comment : comment},
                    context: this,
                    success:function(data){
                        $("#loadingComment").addClass("hide");
                       $('#comment-errors').html('');
                        $(".comments").prepend(data.html);
                    },
                    error: function (xhr) {
                        
                        $("#loadingComment").addClass("hide");
                       $('#comment-errors').html('');
                        $.each(xhr.responseJSON.errors, function(key,value) {
                            $('#comment-errors').append('<div class="alert alert-danger">'+value+'</div');
                        }); 
                    },
                });
            })
        });

        
    </script>
@endsection