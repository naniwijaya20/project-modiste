<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Supplier;

class SupplierAPIController extends Controller
{
    public function index()
    {
        $supplier = Supplier::all();
        return response()->json([
            'message'=>'Data berhasil mengambil data prodi',
            'status'=>'sukses',
            'data'=>$supplier],200);
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $supplier = Supplier::create($input);
        return response()->json([
            'messagge'=>'Data berhasil ditambahkan',
            'status'=>'sukses',
            'data'=>$supplier],201);
        }

        public function update(Request $request, $id)
        {
            $input = $request->all();
            $supplier = Supplier::find($id);
            if (empty($supplier)){
                return response()->json([
                    'message'=>'Data tidak ditemukan',
                    'status'=>'gagal'], 404);
                }
                
                $supplier->update($input);
                return response()->json([
                    'message'=>'Data berhasil di update',
                    'status'=>'sukses',
                    'data' => $supplier
                ],200);
            }
            public function destroy($id)
            {
                $supplier = Supplier::find($id);
                if (empty($supplier)){
                    return response()->json([
                        'message'=>'Data tidak ditemukan',
                        'status'=>'gagal'], 404);
                    }
                    $supplier->delete();
                    return response()->json([
                        'message'=>'Data berhasil di hapus',
                        'status'=>'sukses'],200);
            }
            
}
