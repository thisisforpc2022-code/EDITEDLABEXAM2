<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RiceController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Route;
use App\Models\Rice;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->name('dashboard');


    Route::get('/dashboard', function () {
    $rices = Rice::all();
    return view('dashboard', compact('rices'));
    })->name('dashboard');

    Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::get('payments/{payment}/paid', [PaymentController::class, 'markPaid']);
    Route::resource('rices', RiceController::class);
    Route::resource('orders', OrderController::class);
    Route::resource('payments', PaymentController::class);

    Route::get('payments/{payment}/paid', [PaymentController::class, 'markPaid']);
});

require __DIR__.'/auth.php';
