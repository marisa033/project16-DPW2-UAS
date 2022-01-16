<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\UserController;


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


Route::get('template', function () {
    return view('admin.template');
});

Route::get('dashboard/{status}', [HomeController::class, 'Showberanda']);

// CRUD
// login as Pengguna
// Route::prefix('admin')->middleware('auth:pengguna')->group(function(){
//    Route::resource('produk', ProdukController::class);
//  Route::resource('user', UserController::class);
//    Route::post('produk/filter', [ProdukController::class, 'filter']);
// });

Route::prefix('admin')->middleware(['auth'])->group(function(){
    Route::resource('produk', ProdukController::class);
    Route::resource('user', UserController::class);
    Route::post('produk/filter', [ProdukController::class, 'filter']);
});

Route::get('register', function () {
    return view('register');
});


//Route::get('admin/beranda', [HomeController::class, 'showBeranda']);
//Route::get('admin/profil', [HomeController::class, 'showProfil']);
//Route::get('admin/kategori', [HomeController::class, 'showKategori']);

//Route::get('test/{produk}/{hargaMin?}/{hargaMax?}', [HomeController::class, 'test']);

// login as Admin
//Route::prefix('admin')->middleware('auth:admin')->group(function(){
//   Route::post('produk/filter', [ProdukController::class, 'filter']);
//  Route::resource('produk', ProdukController::class);
//    Route::resource('user', UserController::class);
// });


// tampilan depan
Route::get('/', [indexController::class, 'showindex']);
Route::get('/fashion', [indexController::class, 'showFashion']);
Route::get('/electronic', [indexController::class, 'showElectronic']);
Route::get('/jewellery', [indexController::class, 'showJewellery']);
Route::get('/newreleases', [indexController::class, 'showNewreleases']);
Route::get('/detail', [indexController::class, 'showDetail']);

// login proces
Route::get('login', [AuthController::class, 'showLogin'])->name('login');
Route::post('login', [AuthController::class, 'LoginProcess']);
Route::get('Logout', [AuthController::class, 'Logout']);

// client
Route::get('home', [ClientController::class, 'showhome'] );
Route::get('about', [ClientController::class, 'showabout'] );
Route::get('contact', [ClientController::class, 'showcontact'] );
Route::get('produkshop', [ClientController::class, 'showprodukshop'] );
Route::get('shop', [ClientController::class, 'showshop'] );
Route::post('shop/filter', [ClientController::class, 'filter']);
Route::post('shop/filter2', [ClientController::class, 'filter2']);
Route::get('produkshop/{produk}', [ClientController::class, 'showprodukshop']);


// alamat

Route::get('alamat',[HomeController::class, 'showAlamat'] );

// setting control
Route::get('setting', [SettingController::class, 'index']);
Route::post('setting', [SettingController::class, 'store']);


//produk user controller
Route::get('/', [ClientController::class, 'home']);
Route::get('produk', [ClientController::class, 'produk']);
Route::get('checkout', [ClientController::class, 'checkout']);
Route::post('checkout', [ClientController::class, 'postcheckout']);

//produk cart
Route::get('/', [ClientController::class, 'home']);
Route::get('produk', [ClientController::class, 'produk']);
Route::get('cart', [ClientController::class, 'cart']);
Route::post('cart', [ClientController::class, 'postcart']);