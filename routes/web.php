<?php

use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('auth/google',[GoogleController::class,'loginWithGoogle'])->name('google.login');
    Route::get('auth/google/call-back',[GoogleController::class,'handleGoogleCallback'])->name('callback');

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::prefix('/admin')->name('admin.')->middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // categories route
    Route::get('/categories/create',[CategoriesController::class,'create'])->name('categories.create');
    Route::post('/categories/save',[CategoriesController::class,'store'])->name('categories.store');
    Route::get('/all-categories',[CategoriesController::class,'show'])->name('all.categories.show');
    Route::get('/categories/edit/{id}',[CategoriesController::class,'edit'])->name('categories.edit');
    Route::get('categories/Ddelete/{i}',[CategoriesController::class,'destroy'])->name('categories.destroy');
});

require __DIR__.'/auth.php';
