<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TamuController;
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



// Route::resource('posts', PostController::class)->middleware('auth');

Route::get('/', [PostController::class,'index'])->name('posts')->middleware('auth');
Route::post('/store', [PostController::class,'store'])->name('posts.store');
Route::put('/update/{post}',[PostController::class,'update'])->name('posts.update');
Route::delete('/destroy/{post}',[PostController::class,'destroy'])->name('posts.destroy');

Route::get('/tamu',[TamuController::class,'index'])->name('tamu');

Route::get('/login',[LoginController::class,'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');
Route::get('logoutaksi', [LoginController::class,'logoutaksi'])->name('logoutaksi');
