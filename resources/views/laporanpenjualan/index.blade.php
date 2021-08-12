@extends('layout-admin.main')

@section('tabel')
<div class="product-status mg-b-30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap">
                    <h4>Tabel Laporan Penjualan</h4>
                    <div class="add-product">
                        <a href="/laporanpenjualan/create">Tambah Data</a>
                    </div>
                    <table>
                        <tr>
                            <th>No</th>
                            <th>Hari</th>
                            <th>Tanggal</th>
                            <th>Bulan</th>
                            <th>Jenis Barang</th>
                            <th>Total Penjualan</th>
                            <th>Action</th>
                        </tr>
                        @foreach($laporanPenjualan as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->hari}}</td>
                            <td>{{$item->tanggal}}</td>
                            <td>{{$item->bulan}}</td>
                            <td>{{$item->jenisbarang}}</td>
                            <td>{{$item->totalpenjualan}}</td>
                            <td>
                                <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i
                                        class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i
                                        class="fa fa-trash-o" aria-hidden="true"></i></button>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
