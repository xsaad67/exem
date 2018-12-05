<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use App\Traits\Follow\CanFollow;
use App\Traits\Follow\CanBeFollowed;
use App\Traits\Follow\CanFavorite;
use App\Traits\Follow\CanSubscribe;
use App\Traits\Follow\CanVote;
use Spatie\Activitylog\Traits\LogsActivity;
use App\Traits\Sluggable;


use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable 
{
    use CanFollow, CanBeFollowed, CanFavorite, CanSubscribe, Sluggable, CanVote, LogsActivity, Notifiable;

    public function sluggable() {
        return [
          'source' => 'name',
        ];
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

   
   public function getLinkAttribute(){
        return url("/").'/author/'.$this->slug;
   }

   public function posts(){
        return $this->hasMany(Post::class);
   }

    public function getDpAttribute(){
        return is_null($this->avatar) ? \Avatar::create($this->name)->toBase64(): asset('img/avatars/'.$this->avatar);
    }


}
