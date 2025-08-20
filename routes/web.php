<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminDashboard;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TechnisienController;
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
    Route::get('/admin',[AdminController::class,'adminDash'])->name('admin.dashboard')->middleware('role:admin');
    Route::get('/technisien',[TechnisienController::class,'technisien'])->name('technisien.technisien')->middleware('role:technisien');
    Route::get('/client',[ClientController::class,'clientDash'])->name('client.clientDash')->middleware('role:client');
    Route::post('/client/store',[ClientController::class,'store'])->name('client.store')->middleware('role:client');
    Route::delete('/admin/destroy/{admin}',[AdminController::class,'destroy']);
    Route::put('/admin/approve/{user}',[RegisteredUserController::class,'UserApprove'])->middleware('role:admin');
    Route::get('/postclient',[ClientController::class,'postClient'])->name('postclient.postClient')->middleware('role:client');
    Route::get('/technisieninfo',[TechnisienController::class,'technisienInfo'])->name('technisieninfo.technisienInfo')->middleware('role:technisien');
    Route::post('/technisieninfo/store',[TechnisienController::class,'store'])->middleware('role:technisien');
    Route::get('/technisienpost',[TechnisienController::class,'technisienPost'])->name('technisienpost.technisienPost')->middleware('role:technisien');
    // Route::get('/technisienpost/{technisien}',[TechnisienController::class,'show'])->name('technisienpost.show')->middleware('role:technisien');
    
});

require __DIR__.'/auth.php';
