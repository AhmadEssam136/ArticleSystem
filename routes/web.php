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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Auth::routes();

Route::get('/home', 'HomeController@index')->middleware('checkauth');
Route::resource('articles', 'ArticleController')->middleware('checkauth');



Route::get('/homeUser',function (){
    return view('homeUser');
})->name('homeuser');

Route::post('/', 'ArticleUserController@store');

Route::get('/Articlesuser', 'ArticleUserController@view')->name('Articlesuser');

Route::post('/Articles/{id}/update','ArticleUserController@update')->name('updateArticle');

Route::get('/article/{id}/edit' , 'ArticleUserController@edit')->name('edit');

