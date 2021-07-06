<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Pelanggan;

class PelangganAPIController extends Controller
{
    public function index()
    {
        $pelanggan = Pelanggan::all();
        return response()->json([
            'message'=>'Data berhasil mengambil data prodi',
            'status'=>'sukses',
            'data'=>$pelanggan],200);
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $pelanggan = Pelanggan::create($input);
        return response()->json([
            'messagge'=>'Data berhasil ditambahkan',
            'status'=>'sukses',
            'data'=>$pelanggan],201);
        }

        public function update(Request $request, $id)
        {
            $input = $request->all();
            $pelanggan = Pelanggan::find($id);
            if (empty($pelanggan)){
                return response()->json([
                    'message'=>'Data tidak ditemukan',
                    'status'=>'gagal'], 404);
                }
                
                $pelanggan->update($input);
                return response()->json([
                    'message'=>'Data berhasil di update',
                    'status'=>'sukses',
                    'data' => $pelanggan
                ],200);
            }
            public function destroy($id)
            {
                $pelanggan = Pelanggan::find($id);
                if (empty($pelanggan)){
                    return response()->json([
                        'message'=>'Data tidak ditemukan',
                        'status'=>'gagal'], 404);
                    }
                    $pelanggan->delete();
                    return response()->json([
                        'message'=>'Data berhasil di hapus',
                        'status'=>'sukses'],200);
            }
}
