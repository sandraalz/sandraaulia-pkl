<?php

use App\Http\Controllers\TodoController;

Route::get('/todos', [TodoController::class, 'index']); // Untuk mengambil tugas
Route::post('/todos', [TodoController::class, 'store']); // Untuk menambahkan tugas

