<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\penjualan;
use DB;

class LaporanPenjualanController extends Controller
{
    public function index(){
    	$title = 'Laporan penjualan (Default Hari ini)';
        $data = penjualan::whereDay('tanggal',date('d'))->orderBy('tanggal')->get();

        $tanggal = array();
        $nilai = array();
        foreach ($data as $dt) {
            array_push($tanggal, date('Y-m-d',strtotime($dt->created_at)));
            $hitung = penjualan::where('tanggal',$dt->created_at)->count();
            array_push($nilai, $hitung);
        }
        $tanggal = json_encode($tanggal);
        $nilai = json_encode($nilai);

        $dari = date('Y-m-d');
        $sampai = date('Y-m-d');

        //dd($dari);

        $all = penjualan::all();
    	return view('laporanpenjualan.index',compact('title','data','tanggal','nilai','dari','sampai', 'all'));
  //  dd($all);
    }

    public function tanggal(Request $request){
    	$tanggal1 = date('Y-m-d',strtotime($request->tanggal1));
    	$tanggal2 = date('Y-m-d',strtotime($request->tanggal2));

    	$title = "Laporan Pembayaran dari Tanggal ".date('d-M-Y',strtotime($tanggal1))." sampai Tanggal ".date('d-M-Y',strtotime($tanggal2));
    	$data = penjualan::whereBetween('tanggal',[$tanggal1,$tanggal2])
                ->orderBy('created_at')->get();

        $all = penjualan::all();

        $tanggal = array();
        foreach ($data as $dt) {
            array_push($tanggal, $dt->created_at);
        }
        $tanggal = json_encode($tanggal);

        $dari = $tanggal1;
        $sampai = $tanggal2;

    	return view('laporanpenjualan.index',compact('title','data','tanggal','dari','sampai','all'));
    }

    public function tanggal1(Request $request){
        $tanggal1 = date('Y-m-d',strtotime($request->tanggal1));
        $tanggal2 = date('Y-m-d',strtotime($request->tanggal2));

        $title = "Laporan Pembayaran dari Tanggal ".date('d-M-Y',strtotime($tanggal1))." sampai Tanggal ".date('d-M-Y',strtotime($tanggal2));
        $data = penjualan::whereBetween('tanggal',[$tanggal1,$tanggal2])
                ->orderBy('created_at')->get();

        $tanggal = array();
        foreach ($data as $dt) {
            array_push($tanggal, $dt->created_at);
        }
        $tanggal = json_encode($tanggal);

        $dari = $tanggal1;
        $sampai = $tanggal2;
        

        return view('laporanpenjualan.index',compact('title','data','tanggal','dari','sampai'));
    }


    public function pdf(Request $request)
    {
        $tanggal1 = date('Y-m-d',strtotime($request->tanggal1));
        $tanggal2 = date('Y-m-d',strtotime($request->tanggal2));

        $title = "Laporan Pembayaran dari Tanggal ".date('d-M-Y',strtotime($tanggal1))." sampai Tanggal ".date('d-M-Y',strtotime($tanggal2));
        $data = penjualan::whereBetween('tanggal',[$tanggal1,$tanggal2])
                ->orderBy('created_at')->get();

        $tanggal = array();
        foreach ($data as $dt) {
            array_push($tanggal, $dt->created_at);
        }
        $tanggal = json_encode($tanggal);

        $dari = $tanggal1;
        $sampai = $tanggal2;     

        // $pdf = PDF::loadView('laporanpenjualan.note',compact('title','data','tanggal','dari','sampai','tanggal1','tanggal2'))->setPaper([0,0,500,402],'landscape');
        // return $pdf->stream('Laporan Penjualan.pdf');

    }
}

