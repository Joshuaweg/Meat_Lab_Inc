<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ForumRequest;
use App\ForumPost;
use App\User;
use Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function updateUsername( ForumRequest $request)
    {   //dd($request->input('Username'));
        //dd(Auth::user()->id);
        $id=Auth::user()->id;
        $user= User::find($id);
        $user->Username = $request->input('Username');
        $user->save();
         return redirect('account');
    }
     public function updateBiography( ForumRequest $request)
    {   //dd($request);
        //dd(Auth::user()->id);
        $id=Auth::user()->id;
        $user= User::find($id);
        $user->Biography = $request->input('biography');
        $user->save();
         return redirect('account');
    }
}
