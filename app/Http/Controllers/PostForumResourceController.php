<?php

namespace App\Http\Controllers;

use App\ForumPost;
use Illuminate\Http\Request;
use App\Http\Requests\ForumRequest;

class PostForumResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ForumPost  $forumPost
     * @return \Illuminate\Http\Response
     */
    public function show(ForumPost $forumPost)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ForumPost  $forumPost
     * @return \Illuminate\Http\Response
     */
    public function edit(ForumPost $forumPost,ForumRequest $request,$postid)

    {
            $forumP = ForumPost::find($postid);
            return view('forumposts', compact('forumPost','request','postid','forumP'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ForumPost  $forumPost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ForumPost $forumPost,$postid)
    {
        $forumP = ForumPost::find($postid);
       //dd($forumP);
       $forumP->body = $request->input('body');
        
        $forumP->save();
     
        return redirect('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ForumPost  $forumPost
     * @return \Illuminate\Http\Response
     */
    public function destroy(ForumPost $forumPost)
    {
        //
    }
}
