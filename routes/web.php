<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('blog/', [BlogController::class, 'index'])->name('blog.index');
Route::get('/', [BlogController::class, 'index'])->name('blog.index');
Route::get('blog/create', [BlogController::class, 'create'])->name('blog.create');
Route::post('store', [BlogController::class, 'store'])->name('blog.store');
Route::get('blog/{blog}', [BlogController::class, 'show'])->name('blog.show');
Route::get('blog/{blog}/edit', [BlogController::class, 'edit'])->name('blog.edit');
Route::put('blog/{blog}', [BlogController::class, 'update'])->name('blog.update');
Route::delete('blog/{blog}', [BlogController::class, 'destroy'])->name('blog.destroy');
