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

Route::get('/', 'HomeController@index');
Route::get('/Transaksi', 'TransaksiController@index');
Route::resource('daftarkendaraan', 'MemberKendaraanController');
Route::resource('Purchasepertamaxturbo', 'BahanBakarController');
Route::resource('Purchasepertamax', 'PertamaxController');
Route::resource('Purchasepertalite', 'PertaliteController');
Route::resource('Purchasesolar', 'SolarController');

// Route::get('/Index', function () {
//     return view('index');
// });

Route::get('/Product', function () {
    return view('produk');
});

// Route::get('/Transaksi', function () {
//     return view('transaksi');
// });

Route::get('/About', function () {
    return view('about');
});

Route::get('/Daftarkendaraan', function () {
    return view('daftarkendaraan');
});
// Route::get('/Purchase',function(){
//     return view('purchase');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// Route::get('/home', 'MemberController@index');
