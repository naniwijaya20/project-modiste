<?php

namespace App\Http\Controllers;

use App\DetailPembelian;
use App\Penjualan;

use App\Barang;
use App\Supplier;
use App\Pembelian;

use Illuminate\Http\Request;

class DetailPembelianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penjualan=Penjualan::orderBy('id', 'DESC')->get();
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DetailPembelian  $detailPembelian
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $penjualan=Penjualan::orderBy('id', 'DESC')->get();

        $dp=DetailPembelian::where('pembelian_id', $id)->get();
        $tgl=Pembelian::find($id);
        $detail=DetailPembelian::where('pembelian_id', $id)->first();


        return view('detailpembelian.index',compact('dp','tgl','detail', 'penjualan'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DetailPembelian  $detailPembelian
     * @return \Illuminate\Http\Response
     */
    public function edit(DetailPembelian $detailPembelian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DetailPembelian  $detailPembelian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DetailPembelian $detailPembelian)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DetailPembelian  $detailPembelian
     * @return \Illuminate\Http\Response
     */
    public function destroy(DetailPembelian $detailPembelian)
    {
        //
    }
}
