<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('foo/user/profile/{id}', [UserController::class, 'show_get'])->name('user.show_get');


Route::post('foo/user/profile/', [UserController::class, 'show_post'])->name('user.show_post');