<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


/** 
Route::get('/', function(){
    return view('auth.login');
});
*/

Route::get('/', function(){
    return view('sections.home');
})->name('sections.home');

//rutas Auth (registrar)
Route::get('/register', [RegisterController::class, 'create']); //formulario para el regsitro
Route::post('/register', [RegisterController::class, 'store']); //Registrar usuario

//Rutas para logear usuario
Route::get('/login', [SessionController::class, 'create']);
Route::post('/login', [SessionController::class, 'store'])->name('login');
Route::post('/logout', [SessionController::class, 'destroy']);



//rutas user
Route::get('/index', [UserController::class, 'index'])->name('users.index');
Route::get('/create', [UserController::class, 'create'])->name('users.create');
Route::post('/user/store', [UserController::class, 'store'])->name('users.store');


//Rutas para los posts
Route::get('/post/create', [PostController::class ,'create'])->name('posts.create');
Route::post('/post/store', [PostController::class, 'store'])->name('posts.store');
Route::get('/post/index', [PostController::class, 'index'])->name('posts.index');
Route::delete('/post/destroy/{id}', [PostController::class, 'destroy'])->name('posts.destroy');
Route::get('/post/show/{id}', [PostController::class, 'show'])->name('posts.show');


