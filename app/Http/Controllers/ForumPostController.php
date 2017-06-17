<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ForumRequest;
use App\ForumPost;
use App\User;
use App\Comments;
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
    	return redirect('home');
    }
    public function index(){
    	$posts= ForumPost::with('postAuthor')->get();
        $user =Auth::user();
        $commentspost=ForumPost::with('postComment')->get();
        $comments = Comments::with('commentPost')->get();
    	//dd($comments);
    	return view ('home',compact('posts','user','comments','comments'));
    }

}

