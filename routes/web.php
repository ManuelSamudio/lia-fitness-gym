<?php

Route::get('/', function () {

    if(Auth::check()) return redirect('/dashboard');

    return redirect('/login');
});

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('dashboard');
