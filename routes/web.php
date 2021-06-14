<?php

use Illuminate\Support\Facades\Route;

// タスク一覧ページを表示
Route::get('/folders/{id}/tasks', 'TaskController@index')->name('tasks.index');

// フォルダ作成機能
Route::get('/folders/create', 'FolderController@showCreateForm')->name('folders.create');
Route::post('/folders/create', 'FolderController@create');