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

Route::get('/', function(){
    return view('default.index');
});

Route::get('/diagnosa/{Q}', function(){
    return view('default.diag');
});

Route::get('/about', function(){
    return view('default.about');
});

Route::get('/solution/{Q}', function(){
    return view('default.solution');
});
