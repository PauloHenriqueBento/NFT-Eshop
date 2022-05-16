<?php

use Illuminate\Support\Facades\Route;
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


Route::get('/tag/create', [TagController::class, 'create'])->name('tag.create');
Route::post('/tag/create', [TagController::class, 'store'])->name('tag.store');
Route::get('/tag',[TagController::class, 'index'])->name('tag.index');

Route::get('/tag/destroy/{tag}', [TagController::class, 'destroy'])->name('tag.destroy');
Route::get('/tag/edit/{tag}', [TagController::class, 'edit'])->name('tag.edit');
Route::put('/tag/edit/{tag}', [TagController::class, 'update'])->name('tag.update');
Route::get('/tag/trash', [TagController::class, 'trash'])->name('tag.trash');
Route::get('/tag/restore/{tag}', [TagController::class, 'restore'])->name('tag.restore');
