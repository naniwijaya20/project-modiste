<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Penjualan;
use App\DetailPenjualan;
use App\DetailPembelian;
use App\Barang;
use DB;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $penjualan=Penjualan::orderBy('id', 'DESC')->get();
        $detailPembelian=DetailPembelian::all()->count();
        $detailPenjualan=DetailPenjualan::all()->count();
        
        $detailPenjualanStok=DetailPenjualan::all('jumlah')->sum('jumlah');
        
        $theMostCustomer=DetailPembelian::groupBy('supplier_id')->select('supplier_id', DB::raw('count(*) as total'))->orderBy('total', 'desc')->take(3)->get();

        $barang=Barang::all('stok_barang')->sum('stok_barang');
        $jumlahBarang=Barang::all('stok_barang')->count();
        
        $totalSemua=$detailPenjualan+$barang;
        // return $theMostCustomer;
        // return $detailPenjualanStok;
        return view('home', compact('penjualan', 'jumlahBarang', 'detailPembelian', 'detailPenjualan', 'totalSemua', 'barang', 'detailPenjualanStok', 'theMostCustomer'));
        
    }
}
