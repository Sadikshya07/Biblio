<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostAdController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookController;

//use resources/views/Admin/Categories/index.blade.php;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[HomeController::class,'home'])->name('home');
Route::get('/category',[BookController::class,'show'])->name('books');

Route::get('/admin',[DashboardController::class,'dashboard'])->name('admin.dashboard');
//Ads
Route::get('/admin/Ads',[PostAdController::class,'show'])->name('admin.ads.index');
Route::get('/admin/Ads',[PostAdController::class,'index'])->name('admin.ads.index');
Route::delete('/Ads/{ad}/delete',[PostAdController::class,'destroy'])->name('ads.destroy');
Route::put('/admin/ads/{ad}/approve', [PostAdController::class, 'approve'])->name('ads.approve');

 //Categories
// Route::get('/admin/Categories',[CategoriesController::class,'index'])->name('admin.categories.index');
// Route::get('/admin/create',[CategoriesController::class,'create'])->name('admin.categories.create');
// Route::post('/submit/Categories',[CategoriesController::class,'store']);
// Route::get('/admin/Categories/{Categories}/edit',[CategoriesController::class,'edit']);
// Route::put('/submit/Categories/Update',[CategoriesController::class,'update']);
Route::resource('categories', CategoriesController::class);
//Feedbacks
Route::get('/admin/Feedback',[FeedbackController::class,'show'])->name('admin.feedback.index');
Route::get('/admin/Feedback',[FeedbackController::class,'index'])->name('admin.feedback.index');
Route::delete('/Feedback/{item}/delete',[FeedbackController::class,'destroy'])->name('feedback.destroy');

Route::middleware('auth')->group(function () {
    Route::get('/Ads/create',[PostAdController::class,'create'])->name('admin.ads.create');
    Route::post('/submit',[PostAdController::class,'store'])->name('submit');
    Route::get('/admin/Feedback/create',[FeedbackController::class,'create'])->name('admin.feedback.create');
    Route::post('/submit/Feedback',[FeedbackController::class,'store']);
});
