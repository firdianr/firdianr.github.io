<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Dusun;
use App\Models\Category;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DashboardDesaController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\DashboardDusunController;
use App\Http\Controllers\DashboardHukumController;
use App\Http\Controllers\DashboardLembagaController;
use App\Http\Controllers\DashboardPegawaiController;

Route::get('/', [LandingPageController::class, 'profil_desa']);
Route::get('/kepegawaian', [LandingPageController::class, 'kepegawaian']);
Route::get('/lembagas', [LandingPageController::class, 'lembagas']);
Route::get('/lembagas/{lembaga:slug}', [LandingPageController::class, 'showLembaga']);
// Route::get('/hukums', [LandingPageController::class, 'hukums']);
// Route::get('/hukums/{hukum:slug}', [LandingPageController::class, 'showHukum']);
Route::get('/posts', [LandingPageController::class, 'index']);
Route::get('/posts/{post:slug}', [LandingPageController::class, 'show']);
Route::get('/authors/{user:username}', [LandingPageController::class, 'authorPosts']);
Route::get('/categories/{category:slug}', [LandingPageController::class, 'categoryPosts']);
Route::get('/dusuns/{dusun:slug}', [LandingPageController::class, 'profildusun']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('auth');
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/changepassword', [RegisterController::class, 'edit'])->middleware('auth');
Route::post('/changepassword', [RegisterController::class, 'update']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::resource('/dashboard/desas', DashboardDesaController::class)->middleware('auth');
Route::resource('/dashboard/dusuns', DashboardDusunController::class)->middleware('auth');
Route::resource('/dashboard/pegawais', DashboardPegawaiController::class)->middleware('auth');
Route::resource('/dashboard/lembagas', DashboardLembagaController::class)->middleware('auth');
// Route::resource('/dashboard/hukums', DashboardHukumController::class)->middleware('auth');

Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');
Route::get('/categories/{category:slug}', [DashboardPostController::class, 'categoryPosts']);
Route::get('dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');

Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('auth');

Route::get('/slot', function () {
    return view('slot7', [ 'title' => 'Slot']);
});