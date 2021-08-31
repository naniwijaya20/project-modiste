<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pembelian;
use App\Penjualan;
use DB;

class LaporanPembelianController extends Controller
{
    public function index(){
    	$title = 'Laporan Pembelian (Default Hari ini)';
        $data = Pembelian::whereDay('tanggal',date('d'))->orderBy('tanggal')->get();

        $tanggal = array();
        $nilai = array();
        foreach ($data as $dt) {
            array_push($tanggal, date('Y-m-d',strtotime($dt->created_at)));
            $hitung = Pembelian::where('tanggal',$dt->created_at)->count();
            array_push($nilai, $hitung);
        }
        $tanggal = json_encode($tanggal);
        $nilai = json_encode($nilai);

        $dari = date('Y-m-d');
        $sampai = date('Y-m-d');

        //dd($dari);

        $penjualan=Penjualan::orderBy('id', 'DESC')->get();
        $all = Pembelian::all();
    	return view('laporanpembelian.index',compact('title','data','tanggal','nilai','dari','sampai', 'all','penjualan'));
  //  dd($all);
    }

    public function tanggal(Request $request){
    	$tanggal1 = date('Y-m-d',strtotime($request->tanggal1));
    	$tanggal2 = date('Y-m-d',strtotime($request->tanggal2));

    	$title = "Laporan Pembayaran dari Tanggal ".date('d-M-Y',strtotime($tanggal1))." sampai Tanggal ".date('d-M-Y',strtotime($tanggal2));
    	$data = Pembelian::whereBetween('tanggal',[$tanggal1,$tanggal2])
                ->orderBy('created_at')->get();

        $all = Pembelian::all();

        $tanggal = array();
        foreach ($data as $dt) {
            array_push($tanggal, $dt->created_at);
        }
        $tanggal = json_encode($tanggal);

        $dari = $tanggal1;
        $sampai = $tanggal2;

        $penjualan=Penjualan::orderBy('id', 'DESC')->get();
    	return view('laporanpembelian.index',compact('title','data','tanggal','dari','sampai','all','penjualan'));
    }

    public function tanggal1(Request $request){
        $tanggal1 = date('Y-m-d',strtotime($request->tanggal1));
        $tanggal2 = date('Y-m-d',strtotime($request->tanggal2));

        $title = "Laporan Pembayaran dari Tanggal ".date('d-M-Y',strtotime($tanggal1))." sampai Tanggal ".date('d-M-Y',strtotime($tanggal2));
        $data = Pembelian::whereBetween('tanggal',[$tanggal1,$tanggal2])
                ->orderBy('created_at')->get();

        $tanggal = array();
        foreach ($data as $dt) {
            array_push($tanggal, $dt->created_at);
        }
        $tanggal = json_encode($tanggal);

        $dari = $tanggal1;
        $sampai = $tanggal2;
        

        $penjualan=Penjualan::orderBy('id', 'DESC')->get();
        return view('laporanpembelian.index',compact('title','data','tanggal','dari','sampai','penjualan'));
    }


    public function pdf(Request $request)
    {
        $tanggal1 = date('Y-m-d',strtotime($request->tanggal1));
        $tanggal2 = date('Y-m-d',strtotime($request->tanggal2));

        $title = "Laporan Pembayaran dari Tanggal ".date('d-M-Y',strtotime($tanggal1))." sampai Tanggal ".date('d-M-Y',strtotime($tanggal2));
        $data = Pembelian::whereBetween('tanggal',[$tanggal1,$tanggal2])
                ->orderBy('created_at')->get();

        $tanggal = array();
        foreach ($data as $dt) {
            array_push($tanggal, $dt->created_at);
        }
        $tanggal = json_encode($tanggal);

        $dari = $tanggal1;
        $sampai = $tanggal2;     

        // $pdf = PDF::loadView('laporanpembelian.note',compact('title','data','tanggal','dari','sampai','tanggal1','tanggal2'))->setPaper([0,0,500,402],'landscape');
        // return $pdf->stream('Laporan Pembelian.pdf');

    }
}

