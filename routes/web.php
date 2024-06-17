<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BackupController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ActivityLogController;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('users', UserController::class);
    Route::resource('items', ItemController::class);
    Route::resource('activity-logs', ActivityLogController::class);
    Route::resource('backup', BackupController::class);
  
    Route::get('/backupdelete/{file_name}', [BackupController::class, 'delete']);
    Route::get('/backuprestore', [BackupController::class, 'BackupRestore'])->name('backuprestore');
});

require __DIR__.'/auth.php';
