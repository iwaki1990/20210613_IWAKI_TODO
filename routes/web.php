<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\TaskController;

Route::get('/folders/{id}/tasks', [TaskController::class, 'index'])->name('tasks.index');