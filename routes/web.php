<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about-us', [PageController::class, 'aboutUs'])->name('about-us');
Route::get('/our-services', [PageController::class, 'ourServices'])->name('our-services');
Route::get('/our-approach', [PageController::class, 'ourApproach'])->name('our-approach');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/login', [PageController::class, 'login'])->name('login');
