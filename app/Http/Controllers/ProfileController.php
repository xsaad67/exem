<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Spatie\Activitylog\Models\Activity;
use App\Post;
use App\UserSocial;
use Image;
use App\Comment;

class ProfileController extends Controller
{
    

    public function show($slug){
       $user = User::where('slug',$slug)->firstOrFail();
       return view('profiles.show',compact('user'));
    }

    public function update(Request $request){
       
    }

    public function activities(){
        $user = User::where('slug',$slug)->first();
        $showActivity = ['created','updated'];
        $activities = Activity::where("causer_id",$user->id)->whereIn('description',$showActivity)->latest()->paginate(5);
        return view('profiles.activities',compact('activities','user'));
    }

    public function myVotes(){
        $user=auth()->user();
        $posts = $user->votes(Post::class)->get();
        return view('profiles.votes',compact('user','posts'));
    }


    public function myComments(){
        $user = auth()->user();
        $comments = Comment::with("post")->where('user_id',$user->id)->get();
        return view('profiles.comments',compact('comments','user'));
    }

    public function uploadFile(Request $request){
        $user = auth()->user();

        $fileName = "avatar-".newGuid().".";
        if($request->hasFile('userFile')) {
            $file = $request->file('userFile');
            $fileName.=$file->getClientOriginalExtension();

            $image_resize = Image::make($file->getRealPath());              
            $image_resize->fit(72, 72);

            $image_resize->save(public_path('/img/avatars/'.$fileName));
            $user->avatar = $fileName;
            $user->save();
            return response()->json(["fileName"=>asset("img/avatars/".$fileName)]);
        }

    }

    public function edit(){

    	$user =auth()->user();
    	return view('profiles.edit',compact('user'));
    }
}
