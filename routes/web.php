<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
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

// Route::get('/', function () {
//     return view('layouts/app');
// });
Route::get('/', [PostController::class, 'index']);
Route::get('/them', [PostController::class, 'them'])->middleware('auth');
Route::post('/them', [PostController::class, 'them_']);
Route::get('/xoa/{id}', [PostController::class, 'destroy']);
Route::get('/capnhat/{id}', [PostController::class, 'capnhat'])->middleware('auth');
Route::post('/capnhat/{id}', [PostController::class, 'capnhat_']);
// Route::get('/login', [PostController::class, 'dangnhap'])->middleware('auth');

// Route::get('/login', 'AuthController@showLoginForm')->name('login');
// Route::post('/login', 'AuthController@login');
// Route::post('/register', 'AuthController@register');
// Route::post('/logout', 'AuthController@logout')->name('logout');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
