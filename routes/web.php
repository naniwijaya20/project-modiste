
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
Route::resource('penjualan','PenjualanController');
Route::resource('detailpenjualan','DetailPenjualanConroller');

Route::resource('laporanpenjualan','LaporanPenjualanController');
Route::get('laporanpenjualan','LaporanPenjualanController@index');
Route::get('laporanpenjualan-tanggal','LaporanPenjualanController@tanggal');
// Route::get('laporanpenjualan','LaporanPembelianController@pdf');

Route::resource('laporanpembelian','LaporanPembelianController');
Route::get('laporanpembelian','LaporanPembelianController@index');
Route::get('laporanpembelian-tanggal','LaporanPembelianController@tanggal');
// Route::get('laporanpembelian','LaporanPembelianController@pdf');


Route::get('chart');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/detailpenjualan', 'DetailPenjualanConroller@indexPemberitahuan')->name('pemberitahuan');

