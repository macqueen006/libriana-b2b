<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about-us', [PageController::class, 'aboutUs'])->name('about-us');
Route::get('/solution', [PageController::class, 'solutions'])->name('solution');
Route::get('/our-story', [PageController::class, 'ourStory'])->name('our-story');
Route::get('/product', [PageController::class, 'products'])->name('product');
Route::get('/contact-us', [PageController::class, 'contactUs'])->name('contact-us');
