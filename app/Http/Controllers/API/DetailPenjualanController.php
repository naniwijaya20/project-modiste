<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\DetailPenjualan;

class DetailPenjualanController extends Controller
{
    public function index()
    {
        $detailPenjualan = DetailPenjualan::all();
        return response()->json([
            'message'=>'Data berhasil mengambil data prodi',
            'status'=>'sukses',
            'data'=>$detailPenjualan],200);
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $detailPenjualan = DetailPenjualan::create($input);
        return response()->json([
            'messagge'=>'Data berhasil ditambahkan',
            'status'=>'sukses',
            'data'=>$detailPenjualan],201);
        }

        public function update(Request $request, $id)
        {
            $input = $request->all();
            $detailPenjualan = DetailPenjualan::find($id);
            if (empty($detailPenjualan)){
                return response()->json([
                    'message'=>'Data tidak ditemukan',
                    'status'=>'gagal'], 404);
                }
                
                $detailPenjualan->update($input);
                return response()->json([
                    'message'=>'Data berhasil di update',
                    'status'=>'sukses',
                    'data' => $detailPenjualan
                ],200);
            }
            public function destroy($id)
            {
                $detailPenjualan = DetailPenjualan::find($id);
                if (empty($detailPenjualan)){
                    return response()->json([
                        'message'=>'Data tidak ditemukan',
                        'status'=>'gagal'], 404);
                    }
                    $detailPenjualan->delete();
                    return response()->json([
                        'message'=>'Data berhasil di hapus',
                        'status'=>'sukses'],200);
            }
    //
}
