<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Traits\Follow\CanBeLiked;
use App\Traits\Follow\CanBeFavorited;
use App\Traits\Follow\CanBeVoted;
use Spatie\Activitylog\Traits\LogsActivity;
use App\Traits\Sluggable;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\User;

class Post extends Model
{
  use CanBeLiked, CanBeFavorited, CanBeVoted, LogsActivity, Sluggable, SoftDeletes;

  protected $fillable = ['source'];
  protected $dates = ['deleted_at'];

  protected $appended = ['activities'];

  protected static $logName = 'post';
  
  public function sluggable() {
    return ['source' => 'title'];
  }



  public function getLinkAttribute(){
  	return url('/'). '/post/'.$this->slug;
  }

  public function user(){
  	return $this->belongsTo(User::class);
  }

  public function category(){
    return $this->belongsTo(Category::class);
  }


  public function comments(){
    return $this->hasMany(Comment::class);
  }

  public function scopePopular($query){
    return $query->orderBy("created_at","DESC");
  }

  public function getTitleAttribute($value){
    return $this->attributes['title'] = ucwords(strtolower($value));
  }

  public function activities(){
    return $this->morphMany('Spatie\Activitylog\Models\Activity', 'subject');
  }


}
