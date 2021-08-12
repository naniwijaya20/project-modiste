<?php

namespace App\Http\Controllers;

use App\LaporanPenjualan;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class LaporanPenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $laporanPenjualan=LaporanPenjualan::all();
        return view('laporanpenjualan.index',compact('laporanPenjualan'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('laporanpenjualan.create-laporanpenjualan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        LaporanPenjualan::create($request->all());
        return redirect()->route('laporanpenjualan.index')
        ->with('success','LaporanPenjualan created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\LaporanPenjualan  $laporanPenjualan
     * @return \Illuminate\Http\Response
     */
    public function show(LaporanPenjualan $laporanPenjualan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\LaporanPenjualan  $laporanPenjualan
     * @return \Illuminate\Http\Response
     */
    public function edit(LaporanPenjualan $laporanPenjualan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\LaporanPenjualan  $laporanPenjualan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LaporanPenjualan $laporanPenjualan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\LaporanPenjualan  $laporanPenjualan
     * @return \Illuminate\Http\Response
     */
    public function destroy(LaporanPenjualan $laporanPenjualan)
    {
        //
    }
}
