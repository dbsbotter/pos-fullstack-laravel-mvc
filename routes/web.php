<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

// Route::resource('areas', 'AreaController')
//     ->only('index', 'edit', 'destroy', 'update', 'store');

Route::resource('areas', 'AreaController')
    ->except('show');

Route::resource('studies', 'StudyController')
    ->except('show');
