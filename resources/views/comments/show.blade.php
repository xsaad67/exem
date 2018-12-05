
<div id="comment-{{ $comment->id }}" class="comment byuser comment-author-admin_boombox even thread-even depth-1 parent">

    <article id="comment-{{ $comment->id }}" class="comment-body">

        <footer class="comment-meta">
            <div class="comment-author vcard"> 
                <img alt="{{$comment->user->name}}" src="{{ $comment->user->dp }}" class="avatar avatar-42 photo" height="42" width="42"> 
                <b class="fn">
                    <a href="{{ $comment->user->link }}" class="url">
                        {{ ucwords($comment->user->name) }}
                    </a>
                </b> 
                <span class="says">says:</span>
            </div>

            <div class="comment-metadata">
                    <time datetime="{{ $comment->created_at->format('Y-m-d\TH:i:s') }}"> {{ $comment->created_at->diffForHumans() }} </time>
                
            </div>
        </footer>
        <div class="comment-content">
            <p>{{ $comment->body }}</p>
        </div>
        <br>

    </article>
</div>