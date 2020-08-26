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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test1', function () {
    return "omar";
});

Route::get('/test2/{id}', function ($id) {
    return $id;
});

Route::get('/test3/{id?}', function () {
    return "ppp";
})->name('a');

/* 
Route::namespace('Front')->group(function() {

route::get('users','UserController@showUserName');
});
*/
Route::get('/new','Front\OmarController@kk');
Route::resource('/qq','NewController');
Route::get("getstart",'Front\OmarController@dd');

Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home') ->middleware('verified');
