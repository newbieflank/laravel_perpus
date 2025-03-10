<?php

use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/daftar', [RegisterController::class, 'add'])->name('daftar');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware('auth')->group(function () {
    Route::resource('books', BookController::class);
    Route::resource('peminjaman', PeminjamanController::class);
    Route::get('/autocomplete/books', [PeminjamanController::class, 'autocompleteBooks'])->name('autocomplete.books');
    Route::get('/autocomplete/users', [PeminjamanController::class, 'autocompleteUsers'])->name('autocomplete.users');
    Route::get('/autocomplete/admins', [PeminjamanController::class, 'autocompleteAdmins'])->name('autocomplete.admins');
});



require __DIR__ . '/auth.php';
