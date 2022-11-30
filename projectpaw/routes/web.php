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

Route::view('home', 'v_home');
Route::view('login', 'v_loginAdmin');
Route::view('menu', 'v_menuAdmin');
Route::view('fasilitas', 'v_fasilitasAdmin');
