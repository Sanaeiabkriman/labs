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
// Page home-client
Route::get('/homeclients', 'ClientController@index');

Route::get('/homeclient','ClientController@index');
Route::post('/homeclient/create', 'ClientController@create');
Route::get('/homeclient/edit/{id}', 'ClientController@edit');
Route::post('/homeclient/delete/{id}', 'ClientController@destroy');
Route::post('/homeclient/update/{id}', 'ClientController@update');
// Page home-testiomonials
Route::get('/hometestimonials','TestimonialsController@index');
Route::post('/hometestimonials/create', 'TestimonialsController@create');
Route::get('/hometestimonials/edit/{id}', 'TestimonialsController@edit');
Route::post('/hometestimonials/delete/{id}', 'TestimonialsController@destroy');
Route::post('/hometestimonials/update/{id}', 'TestimonialsController@update');
// Page Roles
Route::get('/role','RoleController@index');
Route::post('/role/create', 'RoleController@create');
Route::get('/role/edit/{id}', 'RoleController@edit');
Route::post('/role/delete/{id}', 'RoleController@destroy');
Route::post('/role/update/{id}', 'RoleController@update');
// Page user
Route::get('/user','UsersController@index');
Route::post('/user/create', 'UsersController@create');
Route::get('/user/edit/{id}', 'UsersController@edit');
Route::post('/user/delete/{id}', 'UsersController@destroy');
Route::post('/user/update/{id}', 'UsersController@update');
// Page services
Route::get('/services','ServicesPageController@index');

// Route::get('/services','ServicesController@index');
// Route::post('/services/create', 'ServicesController@create');
// Route::get('/services/edit/{id}', 'ServicesController@edit');
// Route::post('/services/delete/{id}', 'ServicesController@destroy');
// Route::post('/services/update/{id}', 'ServicesController@update');

// Page Contact
Route::get('/contact', 'CoordController@index');

Route::post('/contactmail', 'ContactController@create');
Route::get('/contact/coordonnee', 'CoordonneeController@index');
Route::post('/contact/coordonnee/create', 'CoordonneeController@create');
Route::get('/contact/coordonnee/edit/{id}', 'CoordonneeController@edit');
Route::post('/contact/coordonnee/delete/{id}', 'CoordonneeController@destroy');
Route::post('/contact/coordonnee/update/{id}', 'CoordonneeController@update');



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
