<?php

use App\Http\Controllers\backend\SliderController;

Route::group(['prefix'=>'slider','as'=>'slider_'],function(){
Route::get('/list',[SliderController::class, 'list'])->name('list');
Route::any('/create',[SliderController::class, 'Add'])->name('add');
Route::any('/edit/{id}',[SliderController::class, 'Edit'])->name('edit');
Route::any('/delete/{id}',[SliderController::class, 'Delete'])->name('delete');
});

