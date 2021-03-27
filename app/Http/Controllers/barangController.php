<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;

class barangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang=Barang::all();
        return view('barang.index',compact('barang'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('barang.create-barang');
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
        Barang::create($request->all());
        return redirect()->route('barang.index')
        ->with('success','Barang created successfully.');
        //
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
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
        $barangEdit = Barang::where('id',$id)->get();
        // dd($barangEdit);
        return view('barang/edit-barang', compact('barangEdit'));
        
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
        $barang = Barang::find($id);
        $barang->nama_barang = $request->nama_barang;
        $barang->ukuran = $request->ukuran;
        $barang->warna = $request->warna;
        $barang->harga = $request->harga;
        $barang->stok_barang = $request->stok_barang;
        $barang->save();
        return redirect()->route('barang.index');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Barang::where('id',$id)->delete();
        return redirect()->route('barang.index');
        //
    }
}
