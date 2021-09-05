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
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('contact','PagesController@contact');
Route::get('about','PagesController@about');


Route::get('profile','ProfileController@profile');
Route::get('mesProduits','ProfileController@mesProduits');



Route::get('/','HomeController@index');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('ench_termine','HomeController@ench_termine');
Route::get('ench_auj','HomeController@ench_auj');

Route::get('/index', 'ProduitController@index');

Route::get('/produits/{id}', 'ProduitController@show');
Route::get('/create', 'ProduitController@create');
Route::delete('/produits/delete/{id}', 'ProduitController@destroy');

Route::get('/produit/{id}/edit', 'ProduitController@edit');

Route::get('/produit/{id}', 'ProduitController@show1');

Route::post('/updateP', 'ProfileController@updateProfile');
Route::post('/updateProduit/{id}', 'ProduitController@updateProduit');

Route::post('/comments', 'CommentController@store');
Route::delete('/comments/delete/{id}', 'CommentController@destroy');
