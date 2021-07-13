@extends('layout-admin.main')
@section('tabel')
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
          <p style="color: white;">{{$supplier->nama_agen}}</p>
        </div>
      </div>
    </div>
  </div>
</div>
<form action="{{route('pembelian.store')}}" method="POST" enctype="multipart/form-data">
  @csrf
  <input name="supplier" type="hidden" class="form-control" value="{{$supplier->id}}" hidden>
  <input name="tanggal" type="hidden" class="form-control" value="<?= date('Y-m-d') ?>" hidden>

  <div class="data-transaksi">
    <div class="product-status mg-b-30">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="product-status-wrap">
              <h4>Barang</h4>

              <div class="product-tab-list tab-pane fade active in" id="description">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="review-content-section">
                      <div class="input-group mg-b-pro-edt">
                        <span class="input-group-addon"><i class="fa fa-archive" aria-hidden="true"></i></span>
                        <select name="namaBarang[]" type="text" class="form-control" placeholder="Nama Barang" required>
                          <option value="" hidden>Nama Barang</option>
                          @foreach($barangs as $barang)
                          <option value="{{$barang->id}}">{{$barang->nama_barang}} | {{$barang->harga_agen}}  | {{$barang->ukuran}} | {{$barang->warna}} </option>
                          @endforeach
                        </select>
                      </div>
                      <div class="input-group mg-b-pro-edt">
                        <span class="input-group-addon"><i class="fa fa-usd" aria-hidden="true"></i></span>
                        <input name="jumlahBarang[]" type="number" class="form-control" placeholder="Jumlah" required>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="product-status mg-b-30">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
          <div class="product-status-wrap">

            <button type="submit" class="btn btn-primary" style="color:white">Masukan Transaksi
            </button>
            <div class="btn btn-success add-data" style="color:white">Tambah Data
            </div>
            
          </div>
        </div>
        <!-- <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
          <div class="product-status-wrap">
            <div>
                <p style="color: orange;">Jumlah total yang dibayar yaitu RP </p>
            </div>
          </div>
        </div> -->
      </div>
    </div>
  </div>
</form>
@endsection

@push('addData')
<script>
  $(".add-data").click(function() {
    let div = `
    <div class="product-status mg-b-30">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="product-status-wrap">
            <h4>Barang</h4>

            <div class="product-tab-list tab-pane fade active in" id="description">
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="review-content-section">
                    <div class="input-group mg-b-pro-edt">
                      <span class="input-group-addon"><i class="fa fa-archive" aria-hidden="true"></i></span>
                      <select name="namaBarang[]" type="text" class="form-control" placeholder="Nama Barang" required>
                        <option value="" hidden>Nama Barang</option>
                        @foreach($barangs as $barang)
                          <option value="{{$barang->id}}">{{$barang->nama_barang}} | {{$barang->harga_agen}}  | {{$barang->ukuran}} | {{$barang->warna}} </option>
                          @endforeach
                      </select>
                    </div>
                    <div class="input-group mg-b-pro-edt">
                      <span class="input-group-addon"><i class="fa fa-usd" aria-hidden="true"></i></span>
                      <input name="jumlahBarang[]" type="number" class="form-control" placeholder="Jumlah" required>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>`;

    $('.data-transaksi').append(div);
  });
</script>
@endpush