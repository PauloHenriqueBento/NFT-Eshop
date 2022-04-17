<?php

use Illuminate\Support\Facades\Route;

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
