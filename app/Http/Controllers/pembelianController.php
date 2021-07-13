<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Supplier;
use App\Barang;
use App\Pembelian;

use App\DetailPembelian;
use PhpParser\Builder\Function_;
use PhpParser\Node\Expr\FuncCall;

class pembelianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suppliers=Supplier::all();
        return view('pembelian.pilihan-supplier',compact('suppliers'));
        //
    }

    
    public function detailTransaksi($id){
        $detailPembelians = DetailPembelian::where('pembelian_id', $id)->get();
        $noTrans = $id;
        foreach($detailPembelians as $supp){
            $sup = $supp->suppliers->nama_agen;
        }
        
        return view('pembelian.detail-transaksi', compact('detailPembelians', 'noTrans','sup'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $total = 0;
        $totalsemua = 0;

        //Memasukan data ke tabel pembelian
        $pembelian = new Pembelian();
        $pembelian->tanggal = $request->tanggal;
        $pembelian->total = 0;
        $pembelian->save();
        $lastPembelian = Pembelian::orderBy('id', 'desc')->first();

        //Memasukan data-data ke tabel detail pembelian
        foreach($request->namaBarang as $key=>$namaBar){
            $data = new DetailPembelian();
            $data->pembelian_id = $lastPembelian->id;
            $data->barang_id = $namaBar;
            $data->supplier_id = $request->supplier;
            $data->jumlah = $request->jumlahBarang[$key];

            $barang = Barang::where('id', $namaBar)->first();

            $total = $request->jumlahBarang[$key] * $barang->harga_agen;
            $totalsemua = $totalsemua + $total;
            $data->save();

            //Tambah stok barang
            $barang->stok_barang = $barang->stok_barang + $data->jumlah;
            $barang->save();

        }
        
        $pembelian->total = $totalsemua;
        $pembelian->save();

        return redirect()->route('pembelian.detail-transaksi', $lastPembelian->id)->with('message', 'Transaksi berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $supplier=Supplier::find($id);
        $barangs=Barang::all();
        return view('pembelian.index',compact('supplier','barangs'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }
}
