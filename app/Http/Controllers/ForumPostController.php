<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ForumRequest;
use App\ForumPost;
use Auth;

class ForumPostController extends Controller
{
    // protected function create($data){
    // 	ForumPost:: create([
    // 		//'userid' => $data[ 'id']
    // 		]);
    // }
    public function create(ForumRequest $request){
    	ForumPost::create(['Userid'=>Auth::user()->id,
    	'body' => $request ->input('body'),]);
    }
    
}

