<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/category', [CategoryController::class,'index'])->middleware(['auth'])->name('category-list');
Route::get('/categories/new', [CategoryController::class,'create'])->middleware(['auth'])->name('category-add');
Route::post('/category/store', [CategoryController::class,'store'])->middleware(['auth'])->name('category-post');

Route::get('/category/{category}/edit', [CategoryController::class,'edit'])->middleware(['auth'])->name('category-edit');
Route::post('/category/{category}/update', [CategoryController::class,'update'])->middleware(['auth'])->name('category-update');

Route::get('/category/{category}/delete', [CategoryController::class,'destroy'])->middleware(['auth'])->name('category-delete');


require __DIR__.'/auth.php';
