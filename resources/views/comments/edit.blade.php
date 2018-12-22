 <form method ="POST" action="{{action('CommentController@update')}}">
    @csrf
    <textarea name="comment" placeholder="Post Your Comment" id="editComment" class="col-12">{{$comment->body}}</textarea>
    <input type="hidden" value="{{encrypt($post->id)}}" name="post" id="commentPostId">
    <div class="col-12">
        <div class="float-right">
            <button type="button" classs="btn create-post" id="create-comment" style="background:red; margin-top:5px;">Update Comment</button>
        </div>
    </div>
   
</form>