<?php
Route::get('/', function () {
    return view('index');
});
Route::get('/portfolio', function () {
    return view('portfolio');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/team', function () {
    return view('team');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/services', function () {
    return view('services');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
