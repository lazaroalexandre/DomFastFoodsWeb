<?php

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
use App\Http\Controllers\HomePageController;

use App\Http\Controllers\Admin\PostController;


use Illuminate\Support\Facades\Auth;

Route::get('/', [HomePageController::class,"index"])->name('home_page');

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');






Route::get('/post/list', [App\Http\Controllers\Admin\PostController::class,"list"])->name('post.list')->middleware("auth");
Route::get('/post/form', [App\Http\Controllers\Admin\PostController::class,"create"])->name('post.create')->middleware("auth");
Route::post('/post', [App\Http\Controllers\Admin\PostController::class,"store"])->name('post.store')->middleware("auth");
Route::get('/post/{post}', [App\Http\Controllers\Admin\PostController::class,"edit"])->name('post.edit')->middleware("auth");
Route::put("/post/{post}", [App\Http\Controllers\Admin\PostController::class,"update"])->name('post.update')->middleware("auth");
Route::delete('/post/{post}', [App\Http\Controllers\Admin\PostController::class,"destroy"])->name('post.destroy')->middleware("auth");



