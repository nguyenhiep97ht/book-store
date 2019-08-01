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
//Route::get('home', 'HomeController@home');


Auth::routes(['verify' => true]);

Route::get('profile', function () {
    return '<h1>This is profile page</h1>';
})->middleware('verified');
Route::get('/logout', 'HomeController@logOut');
Route::get('/home/category/{id}', 'HomeController@sortByCategory');
Route::get('/home', 'HomeController@index')->name('home');

