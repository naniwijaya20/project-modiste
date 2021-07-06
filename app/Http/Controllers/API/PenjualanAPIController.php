<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Penjualan;

class PenjualanAPIController extends Controller
{
    public function index()
    {
        $penjaualan = Penjualan::all();
        return response()->json([
            'message'=>'Data berhasil mengambil data prodi',
            'status'=>'sukses',
            'data'=>$penjaualan],200);
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $penjaualan = Penjualan::create($input);
        return response()->json([
            'messagge'=>'Data berhasil ditambahkan',
            'status'=>'sukses',
            'data'=>$penjaualan],201);
    }

    public function update(Request $request, $id)
        {
            $input = $request->all();
            $penjaualan = Penjualan::find($id);
            if (empty($penjaualan)){
                return response()->json([
                    'message'=>'Data tidak ditemukan',
                    'status'=>'gagal'], 404);
                }
                
                $penjaualan->update($input);
                return response()->json([
                    'message'=>'Data berhasil di update',
                    'status'=>'sukses',
                    'data' => $penjaualan
                ],200);
            }
            public function destroy($id)
            {
                $penjaualan = Penjualan::find($id);
                if (empty($penjaualan)){
                    return response()->json([
                        'message'=>'Data tidak ditemukan',
                        'status'=>'gagal'], 404);
                    }
                    $penjaualan->delete();
                    return response()->json([
                        'message'=>'Data berhasil di hapus',
                        'status'=>'sukses'],200);
            }
}
