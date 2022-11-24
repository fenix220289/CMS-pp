<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\HomeController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard/posts', [PostController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard.posts');
Route::get('/dashboard/posts/add', [PostController::class, 'create'])->middleware(['auth', 'verified'])->name('posts.create');
Route::post('/dashboard/posts/add', [PostController::class, 'store'])->middleware(['auth', 'verified'])->name('posts.store');
Route::get('/dashboard/posts/edit/{post_id}', [PostController::class, 'edit'])->middleware(['auth', 'verified'])->name('posts.edit');
Route::put('/dashboard/posts/edit/{post}', [PostController::class, 'update'])->middleware(['auth', 'verified'])->name('posts.update');
Route::delete('/dashboard/posts/delete/{post}', [PostController::class, 'destroy'])->middleware(['auth', 'verified'])->name('posts.delete');

/**
 * Section Route
 */

Route::get('/dashboard/sections', [SectionController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard.sections');
Route::get('/dashboard/sections/add', [SectionController::class, 'create'])->middleware(['auth', 'verified'])->name('sections.create');
Route::post('/dashboard/sections/add', [SectionController::class, 'store'])->middleware(['auth', 'verified'])->name('sections.store');
Route::get('/dashboard/sections/edit/{section}', [SectionController::class, 'edit'])->middleware(['auth', 'verified'])->name('sections.edit');
Route::put('/dashboard/sections/edit/{section}', [SectionController::class, 'update'])->middleware(['auth', 'verified'])->name('sections.update');
Route::delete('/dashboard/sections/delete/{section}', [SectionController::class, 'destroy'])->middleware(['auth', 'verified'])->name('sections.delete');


require __DIR__.'/auth.php';
