<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Post;

class AdminController extends Controller
{
    public function index()
    {
    	return view("admin.dashboard");
    }

	
	public function displayPosts(){
		$posts = Post::with("user","category")->paginate(5);
		return view('admin.posts.a_post_index',compact('posts'));
	}

}
