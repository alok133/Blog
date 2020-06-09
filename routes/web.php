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

// Route::get('/', function () {
//     return view('blog.home');
// });

Route::get('/','IndexController@index');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=>['auth']],function(){

Route::get('/dashboard','AdminController@dashboard');

// *****************User Profile************************

Route::match(['get','post'],'/addProfile','UserDetailController@addDetails');

Route::match(['get','post'],'/viewProfile','UserDetailController@viewDetails');

Route::match(['get','post'],'/edit/user/{id}','UserDetailController@editDetails');

Route::match(['get','post'],'/delete/user/{id}','UserDetailController@deleteDetails');


// ******************About User*******************

Route::match(['get','post'],'/addAbout','AboutController@addabout');

Route::match(['get','post'],'/viewAbout','AboutController@viewabout');

Route::match(['get','post'],'/edit/about/{id}','AboutController@editAbout');

Route::match(['get','post'],'/delete/about/{id}','AboutController@delete');

// ******************Blog Post*******************

Route::match(['get','post'],'/addBlog','BlogPostController@addBlog');

Route::match(['get','post'],'/viewBlog','BlogPostController@viewBlog');

Route::match(['get','post'],'/edit/blog/{id}','BlogPostController@editBlog');

Route::match(['get','post'],'/delete/blog/{id}','BlogPostController@deleteBlog');

});

Route::match(['get','post'],'/about','AboutController@about');



Route::match(['get','post'],'/admin','AdminController@admin');

Route::match(['get','post'],'/blogPost','BlogPostController@blogPost');

Route::match(['get','post'],'/blog','BlogPostController@showBlog');

Route::match(['get','post'],'/show/blog/{id}','BlogPostController@showBlog');



Route::get('/logout','AdminController@logout');
