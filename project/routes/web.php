<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/catalog', function () {
    return view('catalog');
});
Route::get('/support', function () {
    return view('support');
});

Route::get('/user/{id}/{name}', function ($id, $name) {
    return 'ID:' . $id . '.Name:' . $name;
});