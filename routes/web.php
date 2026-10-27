<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DigitalArtController;

Route::get('/', [DigitalArtController::class, 'welcome'])->name('digital_art.welcome');
Route::get('/gallery', [DigitalArtController::class, 'index'])->name('digital_art.index');
Route::get('/gallery/{digitalArt}', [DigitalArtController::class, 'show'])->name('digital_art.show');