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

Route::get('/', 'PageController@welcome')->name('welcome');
Route::get('/lehrmaterial', 'PageController@lehrmaterial')->name('lehrmaterial');
Route::get('/team', 'PageController@team')->name('team');
Route::get('/partner', 'PageController@team')->name('partner');
Route::get('/software', 'PageController@software')->name('software');
Route::get('/vision', 'PageController@vision')->name('vision');
Route::get('/blog', 'PageController@blog')->name('blog');
Route::get('/impressum', 'PageController@impressum')->name('impressum');




Auth::routes();

Route::get('/home', 'PageController@index')->name('home');

/*============================
=            Blog            =
============================*/
Route::get('/posts/create', 'PostController@create')->name('createPost');
Route::get('/posts', 'PostController@index')->name('indexPosts');
Route::post('/posts', 'PostController@store')->name('storePost');
Route::get('/posts/{post}', 'PostController@show')->name('showPost');
Route::get('/posts/{post}/edit', 'PostController@edit')->name('editPost');
Route::post('/posts/{post}', 'PostController@update')->name('updatePost');
Route::post('/posts/{post}/destroy', 'PostController@destroy')->name('destroyPost');


/*=====  End of Blog  ======*/


/*============================
=            Team            =
============================*/

Route::post('/members','MemberController@store')->name('storeMember');
Route::post('/members/{member}','MemberController@update')->name('updateMember');
Route::get('/members','MemberController@index')->name('indexMembers');
Route::get('/members/create','MemberController@create')->name('createMember');
Route::get('/members/{member}/edit','MemberController@edit')->name('editMember');
Route::post('/members/{member}/destroy','MemberController@edit')->name('destroyMember');

/*=====  End of Team  ======*/
