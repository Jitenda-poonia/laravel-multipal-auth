<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InvoiceController;

// --------------------Notification---------------------------
Route::get('/pay-invoice/{invoice}', [InvoiceController::class, 'payInvoice']);
Route::get('/invoices/{invoice}', [InvoiceController::class, 'showInvoice'])->name('invoices.show');
// ------------------End--Notification---------------------------


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
require __DIR__ . '/admin-auth.php';
require __DIR__ . '/teacher-auth.php';
