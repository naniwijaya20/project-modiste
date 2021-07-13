@extends('layout-admin.main')
@section('tabel')
@if(session('message'))
<div style="margin:10px 20px" class="alert alert-success" role="alert">
  {{ session('message')}}
</div>
@endif
<div class="product-status mg-b-30">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
        <div class="product-status-wrap">
          <h4>Tanggal Pembelian</h4>
          <p style="color: white;"><?= date('d F Y') ?></p>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
        <div class="product-status-wrap">
          <h4>Supplier</h4>
          <p style="color: white;">{{$sup}}</p>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="data-transaksi">
  <div class="product-status mg-b-30">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="product-status-wrap">
            <h4>Tabel Transaksi No. {{$noTrans}}</h4>
            <table>
              <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>Ukuran Barang</th>
                <th>Warna Barang</th>
                <th>Jumlah Barang</th>
                <th>Total</th>
              </tr>
              <?php $no = 1 ;
                $total = 0;
                $totalSemua = 0;
              ?>
              @foreach($detailPembelians as $item)
              <tr>
                <td>{{ $no++ }}</td>
                <td>{{$item->barangs->nama_barang}}</td>
                <td>{{$item->barangs->harga_agen}}</td>
                <td>{{$item->barangs->ukuran}}</td>
                <td>{{$item->barangs->warna}}</td>
                <td>{{$item->jumlah}}</td>
                <td>{{$total = $item->barangs->harga_agen * $item->jumlah}}</td>
                <?php $totalSemua = $totalSemua + $total ?>
              </tr>
              @endforeach
              <tr>
                <th colspan="6">Total Semua</th>
                <th>Rp. {{$totalSemua}}</th>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection