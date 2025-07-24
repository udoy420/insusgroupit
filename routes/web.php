<?php

use App\Http\Controllers\BackendController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SlideController;
use App\Http\Controllers\SoftwareController;
use Illuminate\Support\Facades\Route;


Route::get('/', [FrontendController::class, 'index'])->name('index'); // index
Route::get('/product-site', [FrontendController::class, 'productSite'])->name('product.site'); // product-site

Route::get('/login', [BackendController::class, 'login'])->name('login'); // login

// Route::get('/dashboard', [BackendController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/under-construction', function () {return view('errors.underConstruction');})->name('underConstruction');

// Route::middleware('auth')->group(function () {
Route::middleware(['auth', 'verified'])->group(function () {
// Route::name('admin.')->prefix('admin')->middleware(['auth', 'verified'])->group(function () {

    Route::get('/dashboard', [BackendController::class, 'dashboard'])->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/profile/photo/change', [ProfileController::class, 'profile_photo_change'])->name('profile.photo.change');


    Route::resource('slide', SlideController::class);
    Route::resource('software', SoftwareController::class);
});


require __DIR__.'/auth.php';
