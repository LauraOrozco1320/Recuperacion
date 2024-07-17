<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use Illuminate\Database\Eloquent\Model;

Route::get('/', function () {
    return view('welcome');
});

Route::get('category', [CategoryController::class, 'index'])->name('categories.index');
Route::get('category/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('category', [CategoryController::class, 'store'])->name('categories.store');
Route::get('category/{category}', [CategoryController::class, 'show'])->name('categories.show');
Route::get('category/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
Route::put('category/{category}', [CategoryController::class, 'update'])->name('categories.update');
Route::delete('category/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');