<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class VoteController extends Controller
{
   
    public function voteUp(Request $request){

        if(auth()->check()){

            $class ="";
            $totalVotes =0;
            $user = auth()->user();
            $post = Post::find($request->id);
            if($user->hasUpvoted($post)){ 
                $user->cancelVote($post);   
            }
            else{ 
                $user->vote($post);
                $class="upvoted"; 
            } 

            $totalVotes = $post->fakeUpVotes + $post->upvoters()->count();
            
            return response()->json(['success'=>true,'class'=>$class, 'totalVotes'=>$totalVotes]);

        }else{
            return response()->json(['unauth'=>1,'redirect'=>url("/").'/login']);
        }

    }

    /**
     * @param  Request
     * @return [type]
     */
    public function voteDown(Request $request){
       
        if(auth()->check()){
            $class ="";
            $user = auth()->user();
            $post = Post::find($request->id);
            if($user->hasDownvoted($post)){ 
                $user->cancelVote($post);    
            }
            else{ 
                $user->downvote($post);
                $class="downvoted"; 
            } 
            
            $totalVotes= $post->fakeUpVotes - $post->upvoters()->count();
            return response()->json(['success'=>true,'class'=>$class, 'totalVotes'=>$totalVotes]);

        }else{
            return response()->json(['unauth'=>1,'redirect'=>url("/").'/login']);
        }


    }   
    
}
