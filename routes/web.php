<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;

// Route::get('/',[HomeController::class, "index"]);
// Route::get('/', function () {
//     return view('home');
// });
Route::get('/',[HomeController::class, 'home']);
Route::get('/shadhin',[HomeController::class, 'shadhin']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/about-us', [HomeController::class, 'aboutUs']);
Route::get('/blog-entries', [HomeController::class, 'blogEntries']);
Route::get('/post-details', [HomeController::class, 'postDetails']);
Route::get('/contact-us', [HomeController::class, 'contactUs']);
Route::get('/admin/dashboard', [AdminController::class, 'dashboard']);
Route::get('/admin/categories', [CategoryController::class, 'index']);
Route::get('/admin/categories/create', [CategoryController::class, 'create']);
Route::post('/admin/categories/create', [CategoryController::class, 'store']);
Route::delete('/admin/categories/{id}', [CategoryController::class, 'delete'])->name('category.delete');

