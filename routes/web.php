<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Root portfolio page
Route::get('/', [App\Http\Controllers\PortFolioController::class, 'index']);

// Keep the old URL available as an alias
Route::get('/resume', [App\Http\Controllers\PortFolioController::class, 'index']);

require __DIR__.'/admin.php';
