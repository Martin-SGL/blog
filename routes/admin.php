<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\homeController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RoleController;

Route::get('', [homeController::class, 'index'])->middleware('can:admin.home')->name('admin.home');

Route::resource('users',UserController::class)->only(['index','edit','update'])->names('admin.users');

Route::resource('roles',RoleController::class)->names('admin.roles');

//grupo de rutas categorias
Route::resource('categories', CategoryController::class)->except('show')->names('admin.categories');

//grupo de rutas etiquetas
Route::resource('tags', TagController::class)->except('show')->names('admin.tags');

//grupo de rutas parapost
Route::resource('posts', PostController::class)->except('show')->names('admin.posts');
