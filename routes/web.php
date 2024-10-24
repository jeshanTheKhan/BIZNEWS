<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\BreakingNewsController;
use App\Http\Controllers\WelcomController;
use App\Http\Controllers\Admin\AddsController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WelcomController::class, 'index'])->name('welcome');
Route::get('/change-lan', [WelcomController::class, 'changeLan'])->name('change.lang');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::get('/profile/{id}', [ProfileController::class, 'del'])->name('account.delete');
});
Route::middleware('auth')->group(function () {
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
Route::post('/english-status/{id}', [BreakingNewsController::class, 'EnglishStatus'])->name('EnglishStatus');
Route::get('/Edit-Breaking-News/{id}', [BreakingNewsController::class, 'edit'])->name('edit.breakingnews');
Route::get('/Del-Breaking-News/{id}', [BreakingNewsController::class, 'del'])->name('del.breakingnews');
Route::post('/Update-English-Breaking-News', [BreakingNewsController::class, 'updateEng'])->name('update.english.breakingnews');

// Adds Related
Route::get('/Add-Adds', [AddsController::class, 'index'])->name('add.adds');
Route::post('/Save-Adds', [AddsController::class, 'save'])->name('save.adds');
Route::get('/All-Adds', [AddsController::class, 'table'])->name('all.adds');
Route::post('/adds-status/{id}', [AddsController::class, 'AddStatus'])->name('AddStatus');
Route::get('/Edit-Adds/{id}', [AddsController::class, 'edit'])->name('edit.add');
Route::post('/Update-Adds', [AddsController::class, 'update'])->name('update.add');
Route::get('/Delete-Adds/{id}', [AddsController::class, 'del'])->name('del.add');


// News
Route::get('/Add-News', [NewsController::class, 'index'])->name('add.news');
Route::post('/Save-News', [NewsController::class, 'save'])->name('save.news');
Route::get('/All-News', [NewsController::class, 'table'])->name('all.news');
Route::get('/Edit-News/{id}', [NewsController::class, 'edit'])->name('news.edit');
Route::post('/News-status/{id}', [NewsController::class, 'NewsStatus'])->name('updateNewsStatus');

});
require __DIR__.'/auth.php';
