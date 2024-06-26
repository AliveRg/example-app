<?php

use App\Http\Controllers\TasksController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard' ,[TasksController::class, 'index'])->name('dashboard');

    Route::get('/task' ,[TasksController::class, 'add']);
    Route::post('/task', [TasksController::class, 'create']);
    
    Route::get('/task/{task}', [TasksController::class, 'edit']);
    Route::post ('/task/{task}', [TasksController::class, 'update']);
});
