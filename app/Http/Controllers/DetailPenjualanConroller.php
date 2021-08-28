<?php

namespace App\Http\Controllers;

use App\DetailPenjualan;
use App\Penjualan;
use App\Barang;

use Illuminate\Http\Request;

class DetailPenjualanConroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
     * @param  \App\DetailPenjualan  $detailPenjualan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $dp=DetailPenjualan::find($id);
        // return view('detailpenjualan.index',compact('dp'));
        $dp=DetailPenjualan::where('penjualan_id', $id)->get();
        $detail=DetailPenjualan::where('penjualan_id', $id)->first();

        $penjualan=Penjualan::orderBy('id', 'DESC')->get();
        $tgl=Penjualan::find($id);

        return view('detailpenjualan.index',compact('dp','penjualan','tgl', 'detail'));
        
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DetailPenjualan  $detailPenjualan
     * @return \Illuminate\Http\Response
     */
    public function edit(DetailPenjualan $detailPenjualan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DetailPenjualan  $detailPenjualan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DetailPenjualan $detailPenjualan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DetailPenjualan  $detailPenjualan
     * @return \Illuminate\Http\Response
     */
    public function destroy(DetailPenjualan $detailPenjualan)
    {
        //
    }
}
