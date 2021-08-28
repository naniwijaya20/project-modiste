<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelanggan;
use App\Penjualan;

class pelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pelanggan=Pelanggan::all();
        $penjualan=Penjualan::orderBy('id', 'DESC')->get();
        return view('pelanggan.index',compact('pelanggan','penjualan'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $penjualan=Penjualan::orderBy('id', 'DESC')->get();
        return view('pelanggan.create-pelanggan', compact('penjualan'));

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
        Pelanggan::create($request->all());
        return redirect()->route('pelanggan.index')
        ->with('success','Pelanggan created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pelangganShow = Pelanggan::where('id', $id)->get();
        $penjualan=Penjualan::orderBy('id', 'DESC')->get();
        return view('pelanggan/show-pelanggan', compact('pelangganShow','penjualan'));
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
        $pelangganEdit = Pelanggan::where('id',$id)->get();
        $penjualan=Penjualan::orderBy('id', 'DESC')->get();
        return view('pelanggan/edit-pelanggan', compact('pelangganEdit','penjualan'));
        //
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
        $pelanggan = Pelanggan::find($id);
        $pelanggan->nama = $request->nama;
        $pelanggan->no_hp = $request->no_hp;
        $pelanggan->email = $request->email;
        $pelanggan->alamat = $request->alamat;
        $pelanggan->user_name = $request->user_name;
        $pelanggan->password = $request->password;
        $pelanggan-> konfirmasi_password= $request->konfirmasi_password;
        $pelanggan->save();
        return redirect()->route('pelanggan.index');
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
        Pelanggan::where('id',$id)->delete();
        return redirect()->route('pelanggan.index');
        //
    }
}
