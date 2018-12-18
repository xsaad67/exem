<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Spatie\Activitylog\Models\Activity;
use App\Post;

class ProfileController extends Controller
{
    

    public function show($slug){
    	$showActivity = ['created','updated'];
        $user = User::where('slug',$slug)->first();
    	$activities = Activity::where("causer_id",11)->whereIn('description',$showActivity)->latest()->paginate(5);
    	return view('profiles.activities',compact('activities','user'));
    }


    public function edit(){
    	$user = auth()->user();
    	return view('profiles.edit',compact('user'));
    }
}
