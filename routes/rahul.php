<?php

use App\Http\Controllers\backend\SliderController;
use App\Http\Controllers\backend\ServiceController;
use App\Http\Controllers\backend\RoomController;
use App\Http\Controllers\backend\LeadController;

Route::group(['prefix'=>'slider','as'=>'slider_'],function(){
Route::get('/list',[SliderController::class, 'list'])->name('list');
Route::any('/create',[SliderController::class, 'Add'])->name('add');
Route::any('/edit/{id}',[SliderController::class, 'Edit'])->name('edit');
Route::any('/delete/{id}',[SliderController::class, 'Delete'])->name('delete');
});


Route::group(['prefix'=>'service','as'=>'service_'],function(){
Route::get('/list',[ServiceController::class, 'list'])->name('list');
Route::any('/create',[ServiceController::class, 'Add'])->name('add');
Route::any('/edit/{id}',[ServiceController::class, 'Edit'])->name('edit');
Route::any('/delete/{id}',[ServiceController::class, 'Delete'])->name('delete');
});


Route::group(['prefix'=>'room','as'=>'room_'],function(){
Route::get('/list',[RoomController::class, 'list'])->name('list');
Route::any('/create',[RoomController::class, 'Add'])->name('add');
Route::any('/edit/{id}',[RoomController::class, 'Edit'])->name('edit');
Route::any('/delete/{id}',[RoomController::class, 'Delete'])->name('delete');
});


Route::group(['prefix'=>'leads','as'=>'lead_'],function(){

Route::group(['prefix'=>'room-query','as'=>'room_query_'],function(){
Route::get('/list',[LeadController::class, 'RoomQuerylist'])->name('list');
Route::any('/view/{id}',[LeadController::class, 'RoomQueryView'])->name('view');
Route::any('/delete/{id}',[LeadController::class, 'Delete'])->name('delete');
});


});

