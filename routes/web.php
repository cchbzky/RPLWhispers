<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('login', [LoginController::class, 'login']);
Route::post('login', [LoginController::class, 'authenticate']);

Route::get('tambah', [PostsController::class, 'create']);
Route::post('/', [PostsController::class, 'store']);
Route::get('/', [PostsController::class, 'index']);

Route::get('posts/{id}', [PostsController::class, 'show']);

Route::get('posts/{id}/edit', [PostsController::class, 'edit']);
Route::patch('posts/{id}', [PostsController::class, 'update']);


Route::delete('posts/{id}', [PostsController::class, 'destroy']);
use App\Http\Controllers\Auth\RegisterController;



