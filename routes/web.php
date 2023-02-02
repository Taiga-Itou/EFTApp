<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UploadController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::group(['middleware'=>['auth']], function(){
    Route::get('/posts/create', [PostController::class, 'create']);
    Route::get('/mypage', [ProfileController::class, 'mypage']);
    Route::post('/comment', [PostController::class, 'commentstore']);
    Route::get('/posts/{post}/edit', [PostController::class, 'edit']);
    Route::put('/posts/{post}', [PostController::class, 'update']);
    Route::post('/posts', [PostController::class, 'store']);
    Route::delete('/posts/{post}', [PostController::class, 'delete']);
    
});
Route::get('/random', [PostController::class, 'random']);
Route::put('/good_num/{post}',[PostController::class, 'good_num']);
Route::get('/top', [PostController::class, 'top']);
Route::get('/posts', [PostController::class, 'weponTop']);
Route::get('/posts/{post}', [PostController::class, 'wepon']);
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

