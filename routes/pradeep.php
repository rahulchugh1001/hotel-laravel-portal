<?php

use App\Http\Controllers\backend\BlogCategoryController;
use App\Http\Controllers\backend\BlogController;

Route::group(['prefix'=>'blog_category','as'=>'blog_category_'],function(){
Route::get('/list',[BlogCategoryController::class, 'list'])->name('list');
Route::any('/create',[BlogCategoryController::class, 'Add'])->name('add');
Route::any('/edit/{id}',[BlogCategoryController::class, 'Edit'])->name('edit');
Route::any('/delete/{id}',[BlogCategoryController::class, 'Delete'])->name('delete');
});

Route::group(['prefix'=>'blog','as'=>'blog_'],function(){
    Route::get('/list',[BlogController::class, 'list'])->name('list');
    Route::any('/create',[BlogController::class, 'Add'])->name('add');
    Route::any('/edit/{id}',[BlogController::class, 'Edit'])->name('edit');
    Route::any('/delete/{id}',[BlogController::class, 'Delete'])->name('delete');
    });
    

