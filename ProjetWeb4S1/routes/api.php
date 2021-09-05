<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/store','ProduitController@store')->name('store');

//Route::post('/update','ProduitController@update')->name('update');



Route::get('/getuser', 'ProfileController@getUser');

//Route::post('/updateProfile', 'ProfileController@updateProfile');

Route::post('setEndProduct', 'ProduitController@setEndProduct');
Route::post('enchereTermine', 'ProduitController@enchereTermine');


Route::post('postenchere', 'ProduitController@postenchere');
