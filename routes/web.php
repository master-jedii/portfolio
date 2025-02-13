<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
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

///User
Route::get('/',[BlogController::class,'index']);


///Admin
Route::prefix('admin')->group(function(){
    Route::get('/about',[AdminController::class,'about'])->name('about');
    Route::get('/blog',[AdminController::class,'index'])->name('blog');
    Route::get('/create',[AdminController::class,'create']);
    Route::post('/insert',[AdminController::class,'insert']);
    Route::get('/delete/{id}',[AdminController::class,'delete'])->name('delete');
    Route::get('/change/{id}',[AdminController::class,'change'])->name('change');
    Route::get('/edit/{id}',[AdminController::class,'edit'])->name('edit');
    Route::post('/update/{id}',[AdminController::class,'update'])->name('update');
    Route::get('/welcome',[AdminController::class,'welcome']);
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


