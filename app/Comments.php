<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\ForumPost;


class Comments extends Model
{
    protected $fillable = [
        'postid','userid','body',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
   
public function commentPost(){
	return $this ->hasOne('App\ForumPost','id','postid');
}
}
