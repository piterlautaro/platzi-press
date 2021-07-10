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

// use App\Http\Controllers\PageController;

// use App\Http\Controllers\Backend\PostController;

Route::get('/', [PageController::class, 'posts']);
Route::get('blog/{post}', [PageController::class, 'post'])->name('post');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('posts', 'Backend\PostController')
    ->middleware('auth')
    ->except('show');
