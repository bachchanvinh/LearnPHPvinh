<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
//    return view('welcome');
//
//
//
//});
//
//Route::get('/about', function () {
//
//    return "Hi about page";
//
//});
//
//Route::get('/contact', function () {
//
//    return "Hi contact page";
//
//});
//
//Route::get('/post/{id}/{name}', function ($id,$name){
//    return "this is post number ".$id." ".$name;
//});
//
//Route::get('admin/posts/example', array('as'=>'admin.home',function() {
////    <a href="rout('admin.home')">CLICK HERE</a>
////    $url = route('admin.home');
//    return "this url is ".$url;
//
//}));


//Route::get ('/post/{id}','PostController@index');
//Route::resource('post',"PostController");

Route::get('/contact','PostController@contact');


Route::get('post/{id}/{name}/{pass}','PostController@show_post');

Route::get('learn/{id}/{name}','PostController@test_post');

