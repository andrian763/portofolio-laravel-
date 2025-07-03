<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('portofolio'); // halaman utama portofolio
});

// Tambahkan ini supaya kalau user akses langsung /contact, tetap diarahkan ke halaman portofolio
Route::get('/contact', function () {
    return redirect('/#contact'); // arahkan ke section contact di halaman utama
});

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
