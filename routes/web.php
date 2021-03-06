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
    $blogs = App\Blog::take('4')->orderBy('created_at', 'desc')->get();

    return view('welcome', [
        'blogs' => $blogs
    ]);
})->name('home');

Route::get('/about', function () {
    return view('about');
});

Route::get('/blogs', 'BlogController@index');
Route::get('/blogs/{slug}', 'BlogController@show');

Auth::routes();

Route::get('/home', 'HomeController@index');
