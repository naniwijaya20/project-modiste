
<?php

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

use App\Http\Controllers\pembelianController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('detail-transaksi/{id}', [pembelianController::class, 'detailTransaksi'])->name('pembelian.detail-transaksi');

Route::resource('barang','BarangController');
Route::resource('pelanggan','pelangganController');
Route::resource('supplier','supplierController');
Route::resource('pembelian','pembelianController');

