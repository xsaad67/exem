<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Spatie\Activitylog\Models\Activity;
use App\User;

class ActivityController extends Controller
{
    
    public function index($slug){
    	// return "Hello world";
    	
    	return Activity::all();

    	 return User::where('slug',$slug)->firstOrFail();
    }
}
