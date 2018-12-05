<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfileController extends Controller
{
    

    public function show($slug){
    	$user = User::with('posts')->where("slug",$slug)->firstOrFail();
    	// return $user;
    	return view('profiles.show',compact('user'));
    }
}
