<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Comments;

class ForumPost extends Model
{
    protected $fillable = [
        'Userid','body',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
   
public function postAuthor(){
	return $this ->hasOne('App\User','id','Userid');
}
public function postComment(){
	return $this ->hasMany('App\Comments','id','postid');
}
}
