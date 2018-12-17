<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class SearchController extends Controller
{
    
    public function index(Request $request){
 
    	if(!$request->has('s') || empty($request->s)){
    		return abort(404);
    	}else{
            $query = $request->s;
    		$posts = Post::where('title','LIKE', '%'.$query.'%')
    					->orWhere('description','LIKE','%'.$query.'%')
    					->latest()->paginate(20);

            $totalPosts = count($posts);

            if($totalPosts == 0){
                $posts = Post::latest()->paginate(2);
            }
            
            // return $posts;
			return view('search.index',compact('posts','totalPosts','query'));
    	}
    	

    }
}
