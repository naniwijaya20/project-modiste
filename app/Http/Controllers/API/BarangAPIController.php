<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Barang;

class BarangAPIController extends Controller
{
    public function index()
    {
        $barang = Barang::all();
        return response()->json([
            'message'=>'Data berhasil mengambil data prodi',
            'status'=>'sukses',
            'data'=>$barang],200);
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $barang = Barang::create($input);
        return response()->json([
            'messagge'=>'Data berhasil ditambahkan',
            'status'=>'sukses',
            'data'=>$barang],201);
        }

        public function update(Request $request, $id)
        {
            $input = $request->all();
            $barang = Barang::find($id);
            if (empty($barang)){
                return response()->json([
                    'message'=>'Data tidak ditemukan',
                    'status'=>'gagal'], 404);
                }
                
                $barang->update($input);
                return response()->json([
                    'message'=>'Data berhasil di update',
                    'status'=>'sukses',
                    'data' => $barang
                ],200);
            }
            public function destroy($id)
            {
                $barang = Barang::find($id);
                if (empty($barang)){
                    return response()->json([
                        'message'=>'Data tidak ditemukan',
                        'status'=>'gagal'], 404);
                    }
                    $barang->delete();
                    return response()->json([
                        'message'=>'Data berhasil di hapus',
                        'status'=>'sukses'],200);
            }
}
