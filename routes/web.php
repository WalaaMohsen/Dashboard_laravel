<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
    Route::get('/index',[ProductController::class,'dashboard'])->name('index');
    Route::get('show_all',[ProductController::class,'show_all'])->name('show_all');
    Route::get('update/{id}',[ProductController::class,'update'])->name('update');
    Route::put('edit/{id}',[ProductController::class,'edit'])->name('edit');
    Route::get('delete/{id}',[ProductController::class,'destroy'])->name('destroy');
    Route::get('create_product',[ProductController::class,'Create'])->name('create_product');
    Route::post('store',[ProductController::class,'store'])->name('store');



