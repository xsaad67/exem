<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Spatie\Activitylog\Models\Activity;
use App\Post;
use App\UserSocial;

class ProfileController extends Controller
{
    

    public function show($slug){
        $user = User::where('slug',$slug)->first();
    	$showActivity = ['created','updated'];
    	$activities = Activity::where("causer_id",$user->id)->whereIn('description',$showActivity)->latest()->paginate(5);
    	return view('profiles.activities',compact('activities','user'));
    }

    public function update(Request $request, User $user){
        
    }


    public function edit(){
    	$user =User::find(3); //auth()->user();
    	return view('profiles.edit',compact('user'));
    }
}
