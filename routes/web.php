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

Route::get('/template/post/{type}', function ($type) {
    $url = 'templates.posts.'.$type.'-post-tpl';
    return view($url);
});
Route::get('/template/home', function () {
    return view('templates.home.home-tpl');
});
