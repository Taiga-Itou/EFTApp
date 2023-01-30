<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UploadController;
use Illuminate\Support\Facades\Route;

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
Route::post('/comment', [PostController::class, 'commentstore']);
Route::get('/top', [PostController::class, 'top'])->name('top');
Route::get('/posts/create', [PostController::class, 'create'])->name('create');
Route::get('/posts', [PostController::class, 'weponTop'])->name('weponTop');
Route::delete('/posts/{post}', [PostController::class, 'delete']);
Route::get('/posts/{post}', [PostController::class, 'wepon']);
Route::post('/posts', [PostController::class, 'store']);

Route::get('/posts/{post}/edit', [PostController::class, 'edit']);
Route::put('/posts/{post}', [PostController::class, 'update']);
Route::get('/mypage', [ProfileController::class, 'mypage'])->name('mypage');
Route::get('/wepons/{wepon}', [PostController::class, 'category']);
Route::get('/wepon/{gun}',[PostController::class, 'gun']);


/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');*/

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

