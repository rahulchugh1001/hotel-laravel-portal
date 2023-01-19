<?php

use App\Http\Controllers\backend\BlogCategoryController;
use App\Http\Controllers\backend\BlogController;
use App\Http\Controllers\backend\AboutUsController;
use App\Http\Controllers\backend\WebsiteDetailsController;


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
    
Route::group(['prefix'=>'about_us','as'=>'about_us_'],function(){
    Route::any('/list',[AboutUsController::class, 'about_create'])->name('list');
    Route::any('/add',[AboutUsController::class, 'about_add'])->name('add');
    });

Route::group(['prefix'=>'website_details','as'=>'website_details_'],function(){
    Route::any('/list',[WebsiteDetailsController::class, 'website_details_create'])->name('list');
    Route::any('/add',[WebsiteDetailsController::class, 'website_details_add'])->name('add');
    });
