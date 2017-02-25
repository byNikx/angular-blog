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

Route::get('/template/post/{size}/{type}', function ($size='large', $type) {
    $url = 'templates.posts.'.join('.', array($size, $type)).'-post-tpl';
    return view($url);
});
Route::get('/template/comment-box', function () {
    return view('templates.comment-box.comment-box-tpl');
});
Route::get('/home', function () {
    return view('templates.home.home-tpl');
});
Route::get('/post/view', function () {
    $url = 'templates.posts.preview.post-tpl';
    return view($url);
});
