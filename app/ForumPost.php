<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
   

}
