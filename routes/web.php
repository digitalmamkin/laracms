<?php

use Illuminate\Support\Facades\Route;
use \Admin\UserController;

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
    return view('index');
});

Route::get('/profile', function () {
    return view('pages.profile');
});

Route::get('/post', function () {
    return view('pages.post');
});

Route::get('/admin/setting', function () {
    return view('admin.pages.setting');
});

Route::get('/admin/post', function () {
    return view('admin.post.index');
});

Route::get('/admin/post/trash', function () {
    return view('admin.post.trash');
});

Route::get('/admin/post/add', function () {
    return view('admin.post.add');
});

Route::get('/admin/post/trash', function () {
    return view('admin.post.trash');
});

Route::get('/test', function () {
    return view('pages.test');
});

/*
|--------------------------------------------------------------------------
| Authentication Routes
|--------------------------------------------------------------------------
*/

// User Dashboard Routes
Route::get('/home', function () {
    return view('home');
})->middleware('auth', 'verified');


// Admin Routes
Route::get('/admin', function () {
    return view('admin.index');
})->middleware(['auth', 'auth.isAdmin', 'verified']);

Route::prefix('admin')->middleware(['auth', 'auth.isAdmin'])->name('admin.')->group(function (){
	Route::resource('/users', UserController::class);
});
