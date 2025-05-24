<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/cms', [CmsController::class, 'index'])->name('cms.index');
Route::get('/cms/{id}', [CmsController::class, 'show'])->name('cms.show');

// 投稿作成（管理者のみでOK）
Route::get('/cms/create', [CmsController::class, 'create'])->name('cms.create');
Route::post('/cms', [CmsController::class, 'store'])->name('cms.store');
