<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/news', function (){
   return view('news.index');
})->name('news.index');
Route::get('/news/create', function (){
    return view('news.create');
})->name('news.create');
Route::post('/news', function (){
    //TODO STORE
})->name('news.store');