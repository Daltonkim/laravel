 <?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
  
Route::get('profile', 'UserController@profile');

//route to the users profile
Route::post('profile', 'UserController@update_avatar');
//route to home page
Route::get('/home', 'HomeController@index');
//route to use the auth
Route::auth();
//route to the dashboard
Route::get('/dashboard', [
'uses' => 'PostController@getDashboard',
'as' => 'dashboard',
'middleware'=>'auth'
]);
//route to creat posts by the user
Route::post('/createpost',[
      'uses'=>'PostController@postCreatePost',
      'as' => 'post.create',
       'middleware' => 'auth'
       ]);
//route to delete the post created by th user
Route::get('/delete-post /{post_id}',[

   'uses' => 'PostController@getDeletePost',
   'as' => 'post.delete',
   'middleware'=>'auth'
       ]);
//route to edit th content of a post
Route::post('/edit', [
	'uses' => 'PostController@postEditPost',
	'as' => 'edit'
]);
Route::get('/gallery', 'HomeController@getGallery');

Route::post('/like', [
'uses' => 'PostController@postLikePost',
'as'   => 'like'
  ]);  
Route::get('/donate', 'HomeController@getDonate');


Route::get('/news', 'UserController@News');


Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('/gallery', 'HomeController@getGallery');

