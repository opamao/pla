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

Route::get('/', fn() => view('auth.login'));
Route::get('/login', fn() => \view('auth.login'));
Route::get('/register', fn() => \view('auth.register'));
Route::get('/forgot', fn() => \view('auth.forgot-password'));
Route::get('/index', fn() => \view('admin.index'));
