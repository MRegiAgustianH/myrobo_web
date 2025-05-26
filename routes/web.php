<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SekolahController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index'])
     ->middleware(['auth', 'verified'])
     ->name('dashboard-admin');

Route::prefix('sekolah')->group(function () {
    Route::get('/', [SekolahController::class, 'index'])->name('sekolah.index');
    Route::get('/create', [SekolahController::class, 'create'])->name('sekolah.create');
    Route::post('/', [SekolahController::class, 'store'])->name('sekolah.store');
    Route::get('/{id}', [SekolahController::class, 'show'])->name('sekolah.show');
    Route::get('/{id}/edit', [SekolahController::class, 'edit'])->name('sekolah.edit');
    Route::put('/{id}', [SekolahController::class, 'update'])->name('sekolah.update');  
    
    Route::patch('/{id}', [SekolahController::class, 'update'])->name('sekolah.update');
    Route::delete('/{id}', [SekolahController::class, 'destroy'])->name('sekolah.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
