<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use App\Comment;

class CommentPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function before($user){
        return $user->isAdmin() ? true : false;
    }


    /**
     * Determine if the given comment can be updated by the user.
     *
     * @param  \App\User  $user
     * @param  \App\Comment  $comment
     * @return bool
     */
    public function update(User $user, Comment $comment)
    {
        // dd($comment->user_id);
        return $user->id == $comment->user_id;
    }
}
