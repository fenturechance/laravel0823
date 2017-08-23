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
});

// Route::get('/about', function () {
//     return 'hi aboutpage';
// });

// Route::get('/contact', function () {
//     return 'hi i am contact';
// });

// Route::get('/post/{id}/{name}', function ($id,$name) {
//     return "this is post number".$id." ".$name;
// });

// Route::get('admin/posts/example',array('as'=>'admin.home' ,function () {
    
// 	$url = route('admin.home');

// 	return "this url is".$url;
// }));

/*第二個參數直接放controller和他的method*/
/*網址輸入的值可以直接拿去controller用*/
// Route::get('/post/{id}', 'PostController@index');

Route::resource('posts','PostController');

Route::get('/contact','PostController@contact');

Route::get('/post/{id}/{name}/{password}','PostController@show_post');