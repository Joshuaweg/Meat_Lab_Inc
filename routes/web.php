<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('login');
Route::get('/register', function () {
    return view('auth.register');
})->name('login');
Auth::routes();
Route::post('/savecomment','ForumPostController@create');
Route::get('/comment',function(){
	return view('comment');
});
Route::get('/account', function(){
	$user = Auth::user();
	//dd($user);
	return view('account',compact('user'));
});
Route::get('/username', function(){
	//dd($user);
	return view('username');
Route::resource('resource','ResourceController');
});
Route::resource('forumposts', 'PostForumResourceController');
Route::get('forumposts.edit',function($postid){
	$posts= App\ForumPost::with('postAuthor')->get();
        $user =Auth::user();
		return view('forumposts');
});
Route::get('/makecomment/{postid2}', function($postid2){
	//dd($user);
	return view('makecomment',compact('postid2'));
});
Route::post('/savemakecomment/{postid2}','ResourceController@createComment');
Route::get('/bio', function(){
	//dd($user);
	return view('bio');
});
Route::post('/saveusername','HomeController@updateUsername');
Route::post('/savebio','HomeController@updateBiography');

Route::get('/home', 'ForumPostController@index')->name('home');
