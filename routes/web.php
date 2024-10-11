<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\BreakingNewsController;
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


// Breaking News Related
Route::get('/Add-Breaking-News', [BreakingNewsController::class, 'index'])->name('add.breakingnews');
Route::post('/Save-Breaking-News', [BreakingNewsController::class, 'save'])->name('save.breakingnews');
Route::get('/English-Breaking-News', [BreakingNewsController::class, 'eng'])->name('english.breakingnews');
Route::get('/Bangla-Breaking-News', [BreakingNewsController::class, 'bangla'])->name('bangla.breakingnews');
Route::post('/english-status/{id}', [BreakingNewsController::class, 'EnglishStatus'])->name('EnglishStatus');
Route::get('/Edit-Breaking-News/{id}', [BreakingNewsController::class, 'edit'])->name('edit.breakingnews');
Route::get('/Del-Breaking-News/{id}', [BreakingNewsController::class, 'del'])->name('del.breakingnews');
Route::post('/Update-English-Breaking-News', [BreakingNewsController::class, 'updateEng'])->name('update.english.breakingnews');
Route::get('/Edit-Bangla-Breaking-News/{id}', [BreakingNewsController::class, 'editbangla'])->name('edit.bangla.breakingnews');
Route::post('/Update-Bangla-Breaking-News', [BreakingNewsController::class, 'updatebangla'])->name('update.bangla.breakingnews');


require __DIR__.'/auth.php';
