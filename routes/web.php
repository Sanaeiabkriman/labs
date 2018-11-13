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
// HOME---------------------------------------------------------------
Route::get('/', 'HomepageController@index');
// Page home-intro
Route::get('/homeintro', 'HomeintroController@index');
Route::post('/admin/homeintro/create', 'HomeintroController@create');
Route::get('/edithomeintro/{id}', 'HomeintroController@edit');
Route::post('/homeintro/update/{id}', 'HomeintroController@update');
Route::post('/admin/homeintro/delete/{id}', 'HomeintroController@destroy');
// Page  home-about
Route::get('/homeabout','HomeaboutController@index');
Route::post('/homeabout/create', 'HomeaboutController@create');
Route::get('/homeabout/edit/{id}', 'HomeaboutController@edit');
Route::post('/homeabout/delete/{id}', 'HomeaboutController@destroy');
Route::post('/homeabout/update/{id}', 'HomeaboutController@update');
// Page home-promo
Route::get('/homepromo','HomepromoController@index');
Route::post('/homepromo/create', 'HomepromoController@create');
Route::get('/homepromo/edit/{id}', 'HomepromoController@edit');
Route::post('/homepromo/delete/{id}', 'HomepromoController@destroy');
Route::post('/homepromo/update/{id}', 'HomepromoController@update');


// PAge Contact
Route::post('/contactmail', 'ContactController@create');
Route::get('/contact/coordonnee', 'CoordonneeController@index');
Route::post('/contact/coordonnee/create', 'CoordonneeController@create');
Route::get('/contact/coordonnee/edit/{id}', 'CoordonneeController@edit');
Route::post('/contact/coordonnee/delete/{id}', 'CoordonneeController@destroy');
Route::post('/contact/coordonnee/update/{id}', 'CoordonneeController@update');

Route::get('/services', function(){
    return view ('/services');
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
