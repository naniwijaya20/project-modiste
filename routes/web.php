
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
use App\Http\Controllers\SupplierAPIController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('detail-transaksi/{id}', [pembelianController::class, 'detailTransaksi'])->name('pembelian.detail-transaksi');

Route::resource('barang','BarangController');
Route::resource('pelanggan','pelangganController');
Route::resource('supplier','supplierController');
Route::resource('pembelian','pembelianController');
Route::resource('laporanpenjualan','LaporanPenjualanController');
Route::resource('laporanpembelian','LaporanPembelianController');

Route::get('laporan','LaporanPembelianController@index');
Route::get('laporan-tanggal','LaporanPembelianController@tanggal');
// Route::get('laporan','LaporanPembelianController@pdf');
Route::get('chart');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
