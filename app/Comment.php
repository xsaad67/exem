<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Comment extends Model
{

 	use LogsActivity;

 	protected static $logName = 'comment';
 		  
   	protected $with = ['user'];

    public function user(){
    	return $this->belongsTo(User::class);
    }

    public function post(){
    	return $this->belongsTo(Post::class);
    }
    
   	public function activities(){
    	return $this->morphMany('Spatie\Activitylog\Models\Activity', 'subject');
  	}
}
