<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\KeranjangPembelian;
use Illuminate\Http\Request;


class KeranjangPembelianApiController extends Controller
{
    public function index()
    {
        $keranjangPembelian = KeranjangPembelian::all();
        return response()->json([
            'message'=>'Data berhasil mengambil data prodi',
            'status'=>'sukses',
            'data'=>$keranjangPembelian],200);
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $keranjangPembelian = KeranjangPembelian::create($input);
        return response()->json([
            'messagge'=>'Data berhasil ditambahkan',
            'status'=>'sukses',
            'data'=>$keranjangPembelian],201);
        }

        public function update(Request $request, $id)
        {
            $input = $request->all();
            $keranjangPembelian = KeranjangPembelian::find($id);
            if (empty($keranjangPembelian)){
                return response()->json([
                    'message'=>'Data tidak ditemukan',
                    'status'=>'gagal'], 404);
                }
                
                $keranjangPembelian->update($input);
                return response()->json([
                    'message'=>'Data berhasil di update',
                    'status'=>'sukses',
                    'data' => $keranjangPembelian
                ],200);
            }
            public function destroy($id)
            {
                $keranjangPembelian = KeranjangPembelian::find($id);
                if (empty($keranjangPembelian)){
                    return response()->json([
                        'message'=>'Data tidak ditemukan',
                        'status'=>'gagal'], 404);
                    }
                    $keranjangPembelian->delete();
                    return response()->json([
                        'message'=>'Data berhasil di hapus',
                        'status'=>'sukses'],200);
            }
}
