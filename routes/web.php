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
// Page Home
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
// Page client-Service 
Route::get('/services','ServicesPageController@index');
// Page services
Route::get('/servicesadmin','ServicesController@index');
Route::post('/services/create', 'ServicesController@create');
Route::get('/services/serv/edit/{id}', 'ServicesController@edit');
Route::post('/services/serv/delete/{id}', 'ServicesController@destroy');
Route::post('/services/update/{id}', 'ServicesController@update');
// Page Icones
Route::get('/services/icones', 'IconeController@index');
Route::post('/services/icones/create', 'IconeController@create');
Route::get('/services/icones/edit/{id}', 'IconeController@edit');
Route::post('/services/icones/delete/{id}', 'IconeController@destroy');
Route::post('/services/icones/update/{id}', 'IconeController@update');
// Page projets
Route::get('/projets','ProjetController@index');
Route::post('/projets/create', 'ProjetController@create');
Route::get('/projets/edit/{id}', 'ProjetController@edit');
Route::post('/projets/delete/{id}', 'ProjetController@destroy');
Route::post('/projets/update/{id}', 'ProjetController@update');
// Page etats
Route::get('/blog/etats','EtatsController@index');
Route::post('/blog/etats/create', 'EtatsController@create');
Route::get('/blog/etats/edit/{id}', 'EtatsController@edit');
Route::post('/blog/etats/delete/{id}', 'EtatsController@destroy');
Route::post('/blog/etats/update/{id}', 'EtatsController@update');
// Page tags
Route::get('/blog/tags','TagsController@index');
Route::post('/blog/tags/create', 'TagsController@create');
Route::get('/blog/tags/edit/{id}', 'TagsController@edit');
Route::post('/blog/tags/delete/{id}', 'TagsController@destroy');
Route::post('/blog/tags/update/{id}', 'TagsController@update');
// Page categories
Route::get('/blog/cat','CatController@index');
Route::post('/blog/cat/create', 'CatController@create');
Route::get('/blog/cat/edit/{id}', 'CatController@edit');
Route::post('/blog/cat/delete/{id}', 'CatController@destroy');
Route::post('/blog/cat/update/{id}', 'CatController@update');
// Page articles
Route::get('/blog/article','ArticleController@index');
Route::post('/blog/article/create', 'ArticleController@create');
Route::get('/blog/article/edit/{id}', 'ArticleController@edit');
Route::post('/blog/article/delete/{id}', 'ArticleController@destroy');
Route::post('/blog/article/update/{id}', 'ArticleController@update');
// Mailable
Route::get('/contact', 'CoordController@index');
// Page Contact
Route::post('/contactmail', 'ContactController@create');
Route::get('/contact/coordonnee', 'CoordonneeController@index');
Route::post('/contact/coordonnee/create', 'CoordonneeController@create');
Route::get('/contact/coordonnee/edit/{id}', 'CoordonneeController@edit');
Route::post('/contact/coordonnee/delete/{id}', 'CoordonneeController@destroy');
Route::post('/contact/coordonnee/update/{id}', 'CoordonneeController@update');
// Page Newsletter
Route::post('/newsletter', 'NewsletterController@create');



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
