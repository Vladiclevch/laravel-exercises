<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\TagController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', [AboutController::class, 'index']);


Route::get('admin/tags', [TagController::class, 'index']);

Route::get('admin/tags/create', [TagController::class, 'create'])->name('admin.tags.create');

Route::get('admin/tags/edit', [TagController::class, 'edit'])->name('admin.tags.edit');

Route::get('admin/tags/{id}', [TagController::class, 'show'])->name('admin.tags.show');


Route::get('admin/categories', [CategoryController::class, 'index']);

Route::get('admin/categories/create', [CategoryController::class, 'create'])->name('admin.categories.create');

Route::get('admin/categories/edit', [CategoryController::class, 'edit'])->name('admin.categories.edit');

Route::get('admin/categories/{id}', [CategoryController::class, 'show'])->name('admin.categories.show');
