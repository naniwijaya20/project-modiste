<?php

namespace App\Http\Controllers;

use App\LaporanPembelian;
use Illuminate\Http\Request;

class LaporanPembelianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $laporanPembelian=LaporanPembelian::all();
        return view('laporanpembelian.index',compact('laporanPembelian'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('laporanpembelian.create-laporanpembelian');
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
        LaporanPembelian::create($request->all());
        return redirect()->route('laporanpembelian.index')
        ->with('success','LaporanPembelian created successfully.');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\LaporanPembelian  $laporanPembelian
     * @return \Illuminate\Http\Response
     */
    public function show(LaporanPembelian $laporanPembelian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\LaporanPembelian  $laporanPembelian
     * @return \Illuminate\Http\Response
     */
    public function edit(LaporanPembelian $laporanPembelian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\LaporanPembelian  $laporanPembelian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LaporanPembelian $laporanPembelian)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\LaporanPembelian  $laporanPembelian
     * @return \Illuminate\Http\Response
     */
    public function destroy(LaporanPembelian $laporanPembelian)
    {
        //
    }
}
