<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Barang;
use App\Penjualan;

class barangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penjualan=Penjualan::orderBy('id', 'DESC')->get();
        $barang=Barang::all();
        return view('barang.index', compact('barang','penjualan'));
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
        return view('barang.create-barang', compact('penjualan'));
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

        $namaFile = $_FILES['foto']['name'];
        $targetUpload = "img/barang/";

        $namaFotoDefault = "default.png";

        $tmp = $_FILES['foto']['tmp_name'];
        
       
        if($namaFile === ""){
            $input = $request->all();
            $input['foto'] = $namaFotoDefault;
            Barang::create($input);
            return redirect()->route('barang.index')->with('status','Barang Telah Disimpian.');
        }


        $input = $request->all();
        $input['foto'] = $namaFile;
        move_uploaded_file($tmp, $targetUpload.$namaFile);

        Barang::create($input);

        return redirect()->route('barang.index')->with('status','Barang Telah Disimpian.');
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
        $penjualan=Penjualan::orderBy('id', 'DESC')->get();
        // dd($barangEdit);
        return view('barang/edit-barang', compact('barangEdit','penjualan'));
        
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
        $namaFile = $_FILES['foto']['name'];
        $targetUpload = "img/barang/";
        $tmp = $_FILES['foto']['tmp_name'];

        $barang = Barang::find($id);

        $fotoLama = $barang->foto;

        $barang->nama_barang = $request->nama_barang;
        $barang->ukuran = $request->ukuran;
        $barang->warna = $request->warna;
        $barang->harga = $request->harga;
        $barang->stok_barang = $request->stok_barang;
        $barang->foto = $namaFile;
    
        if($fotoLama === 'default.png' || $fotoLama === null){
            move_uploaded_file($tmp, $targetUpload.$namaFile);
            $barang->save();
            return redirect()->route('barang.index');
        };

        unlink($targetUpload.$fotoLama);

        move_uploaded_file($tmp, $targetUpload.$namaFile);
        $barang->save();
        return redirect()->route('barang.index');


        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $targetUpload = "img/barang/";
        $foto = Barang::find($id);

        // dd($foto);

        if($foto->foto === "default.png" || $foto->foto === null)
        {
            Barang::where('id',$id)->delete();
            return redirect()->route('barang.index');
        }
        unlink($targetUpload.$foto->foto);


        Barang::where('id',$id)->delete();

        return redirect()->route('barang.index');
        //
    }
}
