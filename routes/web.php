<?php
# @Date:   2019-09-24T13:09:27+01:00
# @Last modified time: 2019-09-24T15:08:51+01:00




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
Route::get('/HelloWorld', function () {
    return '<p>Hello World</p>';
});
Route::get('/hannah', function () {
    return view('hannah') ;
});
Route::get('/about', function () {
    return '<h1>about page</h1>';
});
Route::get('/hello', 'HelloController@hello');
