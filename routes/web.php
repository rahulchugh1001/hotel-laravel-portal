<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\DashboardController;
use App\Http\Controllers\frontend\AboutUsController;
use App\Http\Controllers\frontend\RoomController;
use App\Http\Controllers\frontend\ContactUsController;
use App\Http\Controllers\frontend\BlogController;
use App\Http\Controllers\frontend\IndexController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::any('/', function () {
//     return view('frontend.index');
// })->name('index');
Route::any('/',[IndexController::class,'index'])->name('index');
Route::get('/about-us',[AboutUsController::class,'page'])->name('aboutus');
Route::get('/our-rooms',[RoomController::class,'page'])->name('roomslist');
Route::any('/thank-you',[IndexController::class,'ThankYou'])->name('thankyou');
Route::any('/room/detail/{slug}',[RoomController::class,'Detail'])->name('roomsdetail');
Route::get('/contact-us',[ContactUsController::class, 'contactUs'])->name('contact_us');
Route::get('/blog',[BlogController::class, 'blogIndex'])->name('blog');
Route::get('/blog-detail',[BlogController::class, 'blogDetails'])->name('blog_details');
Route::get('/mail-content',function(){
  return view('user_mail');
});


Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('config:clear');
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:cache');
    return 'DONE'; //Return anything
});

Auth::routes();

Route::any('dashboard', [DashboardController::class, 'index'])->name('dashboard');


Route::group(['middleware' => ['auth']], function() {

   include('rahul.php');
   include('pradeep.php');

   
});   



