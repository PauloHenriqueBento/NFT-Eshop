<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NftController;
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

require __DIR__.'/auth.php';
/*------------------------
| Route for NFT's (CRUD) |
------------------------*/
Route::get('/nft/create', [NftController::class, 'create'])->name('nft.create');
Route::post('/nft/create', [NftController::class, 'store'])->name('nft.store');
Route::get('/nft', [NftController::class, 'index'])->name('nft.index');
Route::get('/nft/destroy/{nft}', [NftController::class, 'destroy'])->name('nft.destroy');
Route::get('/nft/edit/{nft}', [NftController::class, 'edit'])->name('nft.edit');
Route::post('/nft/edit/{nft}', [NftController::class, 'update'])->name('nft.update');
Route::get('/nft/trash', [NftController::class, 'trash'])->name('nft.trash');
Route::get('nft/restore/{nft}', [NftController::class, 'restore'])->name('nft.restore');


/*----------------------
| Route for Categories |
----------------------*/

Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
Route::post('/category/create', [CategoryController::class, 'store'])->name('category.store');
Route::get('/category',[CategoryController::class, 'index'])->name('category.index');
Route::get('/category/destroy/{category}', [CategoryController::class, 'destroy'])->name('category.destroy');
Route::get('/category/edit/{category}', [CategoryController::class, 'edit'])->name('category.edit');
Route::put('/category/edit/{category}', [CategoryController::class, 'update'])->name('category.update');
Route::get('/category/trash', [CategoryController::class, 'trash'])->name('category.trash');
Route::get('/category/restore/{category}', [CategoryController::class, 'restore'])->name('category.restore');
