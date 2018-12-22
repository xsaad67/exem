
<div id="comment-{{ $comment->id }}" class="comment byuser comment-author-admin_boombox even thread-even depth-1 parent ">

    <article id="comment-{{ $comment->id }}" class="comment-body ">

        <footer class="comment-meta">
            <div class="comment-author vcard"> 
                <img alt="{{$comment->user->name}}" src="{{ $comment->user->dp }}" class="avatar avatar-42 photo" height="42" width="42"> 
                <b class="fn">
                    <a href="{{ $comment->user->link }}" class="url">
                        {{ ucwords($comment->user->name) }}
                    </a>
                </b> 
               


            </div>

            <div class="comment-metadata">
                <time datetime="{{ $comment->created_at->format('Y-m-d\TH:i:s') }}"> {{ $comment->created_at->diffForHumans() }} </time>
            </div>
        </footer>
        
        <div class="comment-content mt-2">
            <p>{{ $comment->body }}</p>
        </div>

        @can('update',$comment) 

            <div class="d-flex flex-row-reverse">
                <button class="btn btn-danger ml-2 btn_commentDelete">Delete</button>
                <button class="btn btn-info ml-2 btn_commentEdit">Edit</button>
            </div>

            <div id="comment-errors-{{$comment->id}}" class="ajaxErrors"></div>

        @endcan

       

        
    </article>
</div>