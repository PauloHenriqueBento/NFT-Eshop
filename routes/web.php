<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NftController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\Teste_Product;

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
-----------------------*/
Route::get('/nft/create', [NftController::class, 'create'])->name('nft.create');
Route::post('/nft/create', [NftController::class, 'store'])->name('nft.store');
Route::get('/nft', [NftController::class, 'index'])->name('nft.index');
Route::get('/nft/destroy/{nft}', [NftController::class, 'destroy'])->name('nft.destroy');
Route::get('/nft/edit/{nft}', [NftController::class, 'edit'])->name('nft.edit');
Route::post('/nft/edit/{nft}', [NftController::class, 'update'])->name('nft.update');
Route::get('/nft/trash', [NftController::class, 'trash'])->name('nft.trash');
Route::get('nft/restore/{nft}', [NftController::class, 'restore'])->name('nft.restore');


/*---------------
| Route for Tags |
---------------*/
Route::get('/tag/create', [TagController::class, 'create'])->name('tag.create');
Route::post('/tag/create', [TagController::class, 'store'])->name('tag.store');
Route::get('/tag',[TagController::class, 'index'])->name('tag.index');

Route::get('/tag/destroy/{tag}', [TagController::class, 'destroy'])->name('tag.destroy');
Route::get('/tag/edit/{tag}', [TagController::class, 'edit'])->name('tag.edit');
Route::put('/tag/edit/{tag}', [TagController::class, 'update'])->name('tag.update');
Route::get('/tag/trash', [TagController::class, 'trash'])->name('tag.trash');
Route::get('/tag/restore/{tag}', [TagController::class, 'restore'])->name('tag.restore');


// Admin
Route::middleware(['auth','admin'])->group(function () {
    /*----------------------
    | Route for Categories |
    ---------------------*/

    Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
    Route::post('/category/create', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/category',[CategoryController::class, 'index'])->name('category.index');
    Route::get('/category/destroy/{category}', [CategoryController::class, 'destroy'])->name('category.destroy');
    Route::get('/category/edit/{category}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::put('/category/edit/{category}', [CategoryController::class, 'update'])->name('category.update');
    Route::get('/category/trash', [CategoryController::class, 'trash'])->name('category.trash');
    Route::get('/category/restore/{category}', [CategoryController::class, 'restore'])->name('category.restore');
});

// Client
Route::middleware(['auth','client'])->group(function () {

});
