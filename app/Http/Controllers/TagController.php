<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class TagController extends Controller
{

    public function show($tag){
    	$posts = Post::where('tags','LIKE','%'.$tag.'%')->paginate(20);
    	$totalPosts = count($posts);
    	if($posts->isEmpty()){
    		return abort(404);
    	}else{
    		return view('tags.show',compact('posts','totalPosts'));
    	}
    }
}
