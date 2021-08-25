@extends('layout-admin.main')
@section('tabel')
<div class="product-status mg-b-30">
  <div class="container-fluid">
    <div class="row">
    </div>
  </div>
</div>
<div class="data-transaksi">
  <div class="product-status mg-b-30">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="product-status-wrap">
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
              @foreach($dp as $item)
              <tr>
                <td>{{$no++ }}</td>
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