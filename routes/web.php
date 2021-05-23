<?php

use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;

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
Auth::routes();

Route::get('/', function () {
    return view('home');
});
Route::get('/contact', function () {
    return view('pages.contact');
});
Route::get('/about', function () {
    return view('pages.about');
});
Route::get('/blog', [PostsController::class, 'posts']);

Route::resource('posts', PostsController::class);
// Route::delete('posts/{posts}', 'PostsController@destroy')->name('posts.destroy');
// Route::delete('posts/{posts}', 'PostsController@destroy')->name('posts.destroy');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
