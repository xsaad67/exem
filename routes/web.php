<?php
use Illuminate\Support\Facades\File;
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
Auth::routes();


// Route::get('/',function(){
// 	return view('layouts.main1');
// });



Route::get('/','PostController@index');
Route::get('/redditjson','RedditController@index');
Route::get('/post/create','PostController@create');
Route::get('/post/{post}','PostController@show');
Route::get('/post/edit/{post}','PostController@edit');
Route::post('/post/update/{post}','PostController@update');
Route::post('/post/store','PostController@store');
Route::post('upload_image','PostController@uploadImage')->name('upload-image');
Route::post('/voteup','VoteController@voteUp');
Route::post('/votedown','VoteController@voteDown');
Route::get('/refresh-posts','PostController@refreshDB');
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/comment','CommentController');

Route::get('/image','PostController@index');


Route::prefix('super')->group(function(){
	Route::get('/dashboard','AdminController@index')->name('dashboard');
});

Route::prefix('crawl')->group(function () {
   	Route::get('/randusers','CrawlController@randomUsers');
  	Route::get('/randbio','CrawlController@randomBio');
  	Route::get('/reddit','CrawlController@reddit');
  	Route::get('/fml','CrawlController@fml');
  	Route::get('/short-stories','CrawlController@short_stories');
});


Route::group(['middleware' => ['admin'], 'prefix' => 'admin'], function () {
	Route::get('/hello',function(){
		return "hello";
	});
});

// Route::prefix('image')->group(function()){
// 	Route::get('/{width}x{}')
// }

Route::prefix('author')->group(function(){
	Route::get('/{slug}','ProfileController@show');
});


Route::prefix('category')->group(function(){
	Route::get('/{slug}','CategoryController@show');
});


Route::get('/users',function(){
	return App\User::latest()->get();
});


Route::prefix('/activity')->group(function(){
	Route::get('all/{slug}','ActivityController@index');
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
