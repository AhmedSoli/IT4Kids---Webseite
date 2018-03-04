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
Route::get('/blog/create', 'BlogController@create')->name('createPost');
Route::post('/blog', 'BlogController@store')->name('storePost');
Route::get('/blog/{post}', 'BlogController@show')->name('showPost');
/*=====  End of Blog  ======*/


/*============================
=            Team            =
============================*/

Route::post('/team','MemberController@store')->name('storeMember');
Route::get('/team/create','MemberController@create')->name('createMember');

/*=====  End of Team  ======*/
