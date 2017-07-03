<?php

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
