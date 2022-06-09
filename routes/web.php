<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NftController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\Teste_Product;
use App\Http\Controllers\UserController;
use App\Http\Controllers\eCommerceController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;


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

Route::get('/', [eCommerceController::class, 'index'])->name('home');
Route::get('/search/category/{category}', [eCommerceController::class, 'searchCategory'])->name('search-category');
Route::get('/search/tag/{tag}', [eCommerceController::class, 'searchTag'])->name('serach-tag');
Route::get('/search/nft/',  [eCommerceController::class, 'searchNft'])->name('search.nft');
Route::get('/show/{nft}', [eCommerceController::class, 'showNft'])->name('show.nft');

/*Route::get('/', function () {
    return view('welcome');
});*/

//Pag. FAQ
Route::get('/faq', function () {
    return view('faq')->name('faq');
});

Route::get('/sobre', function () {
    return view('sobre')->name('sobre');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::middleware(['auth'])->group(function(){
    //Pra adicionar no carrinho tem que estar Autenticado
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('/cart/{nft}', [CartController::class, 'store'])->name('cart.store');
    Route::delete('/cart/{nft}', [CartController::class, 'destroy'])->name('cart.destroy');

    Route::post('/order', [OrderController::class, 'store'])->name('order.store');
    Route::get('/order', [OrderController::class, 'index'])->name('order.index');
    Route::get('/user/profile', [UserController::class, 'profile'])->name('user.profile');
    Route::get('/user/profile/edit/{user}', [UserController::class, 'edit'])->name('user.edit');
});
Route::middleware(['auth'])->group(function(){
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('/cart/{nft}', [CartController::class, 'store'])->name('cart.store');
    Route::delete('/cart/{nft}', [CartController::class, 'destroy'])->name('cart.destroy');

    //Paulo essas 2 rotas acho que tanto faz, ficar aqui ou nas middleware de cima
    Route::post('/order', [OrderController::class, 'store'])->name('order.store');
    Route::get('/order', [OrderController::class, 'index'])->name('order.index');
});
/*------------------------
| Route for NFT's (CRUD) |
------------------------*/
//lembrar descomentar Admin
Route::middleware(['auth',/*'admin'*/])->group(function(){
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

    Route::get('/tag/create', [TagController::class, 'create'])->name('tag.create');
    Route::post('/tag/create', [TagController::class, 'store'])->name('tag.store');
    Route::get('/tag',[TagController::class, 'index'])->name('tag.index');
    Route::get('/tag/destroy/{tag}', [TagController::class, 'destroy'])->name('tag.destroy');
    Route::get('/tag/edit/{tag}', [TagController::class, 'edit'])->name('tag.edit');
    Route::put('/tag/edit/{tag}', [TagController::class, 'update'])->name('tag.update');
    Route::get('/tag/trash', [TagController::class, 'trash'])->name('tag.trash');
    Route::get('/tag/restore/{tag}', [TagController::class, 'restore'])->name('tag.restore');

    Route::get('/users', [UserController::class, 'index'])->name('user.index');
});

