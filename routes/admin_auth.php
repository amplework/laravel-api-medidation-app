<?php

use App\Http\Controllers\SuperAdmin\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\NotificationController;
use App\Http\Controllers\DashboardController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::redirect('/admin', '/admin/dashboard');

Route::middleware(['guest'])->prefix('admin/')->name('admin.')->group(function () {    
    Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('login', [AuthenticatedSessionController::class, 'store']);
});

Route::prefix('/admin')->name('admin.')->middleware('auth:admin')->group(function () {
    // Dash_board Route 
    Route::get('/admin/dashboard',[DashboardController::class,'admin_dashboard'])->name('admin.dashboard');
    // logout route
    Route::any('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
    // Profile Update Route 
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');   
    // categories route
    Route::get('/categories/create', [CategoriesController::class, 'create'])->name('categories.create');
    Route::post('/categories/save', [CategoriesController::class, 'store'])->name('categories.store');
    Route::get('/all-categories', [CategoriesController::class, 'show'])->name('all.categories.show');
    Route::get('/categories/edit/{id}', [CategoriesController::class, 'edit'])->name('categories.edit');
    Route::get('categories/Ddelete/{i}', [CategoriesController::class, 'destroy'])->name('categories.destroy');
    // Notification Route 
    Route::get('/notification/new',[NotificationController::class,'create'])->name('notification.create');
    Route::post('/notification/store',[NotificationController::class,'store'])->name('notification.store');
    Route::get('notification/show',[NotificationController::class,'show'])->name('notification.show');
});
