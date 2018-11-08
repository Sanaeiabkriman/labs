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
Route::get('/homeintro', 'HomeintroController@index');
Route::post('/admin/homeintro/create', 'HomeintroController@create');
Route::get('/', 'HomepageController@index');
Route::get('/edithomeintro/{id}', 'HomeintroController@edit');
Route::post('/homeintro/update/{id}', 'HomeintroController@update');
Route::post('/admin/homeintro/delete/{id}', 'HomeintroController@destroy');

Route::get('/services', function(){
    return view ('/services');
});
Route::get('/contact', function(){
    return view ('/contact');
});
Route::get('/blog', function(){
    return view ('/blog');
});
Route::get('/blog-post', function(){
    return view ('/blog-post');
});
Route::get('/elements', function(){
    return view ('/elements');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
