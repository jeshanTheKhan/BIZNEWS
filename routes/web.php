<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\MainHeadlineController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
// Category Related
Route::get('/Add-News-Category', [CategoryController::class, 'index'])->name('add.category');
Route::post('/Save-News-Category', [CategoryController::class, 'save'])->name('save.category');
Route::get('/All-News-Category', [CategoryController::class, 'table'])->name('all.category');
Route::get('/Edit-News-Category/{id}', [CategoryController::class, 'edit'])->name('edit.category');
Route::post('/Update-News-Category', [CategoryController::class, 'update'])->name('update.category');
Route::get('/Del-News-Category/{id}', [CategoryController::class, 'del'])->name('del.category');
Route::post('/cat/update-status/{id}', [CategoryController::class, 'updateCatStatus'])->name('updateCatStatus');


require __DIR__.'/auth.php';
