<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

// タスク一覧ページを表示
Route::get('/folders/{id}/tasks', [TaskController::class,'index'])->name('tasks.index');

// フォルダ作成機能
Route::get('/folders/{id}/create', [FolderController::class,'showCreateForm'])->name('folders.create');
Route::post('/folders/{id}/create',[FolderController::class,'create'];