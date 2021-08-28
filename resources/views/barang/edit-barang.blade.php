@extends('layout-admin.main')
@section('judul', 'Barang')

@section('tabel')
<div class="single-product-tab-area mg-b-30">
  <!-- Single pro tab review Start-->
  <div class="single-pro-review-area">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="review-tab-pro-inner">
            <ul id="myTab3" class="tab-review-design">
              <li class="active"><a href="#description"><i class="icon nalika-edit" aria-hidden="true"></i> Product Edit</a></li>
            </ul>
            <div id="myTabContent" class="tab-content custom-product-edit">
              @foreach($barangEdit as $item)
              <form action="{{route('barang.update',$item->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')

                <div class="product-tab-list tab-pane fade active in" id="description">
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                      <div class="review-content-section">
                        <div class="input-group mg-b-pro-edt">
                          <span class="input-group-addon"><i class="fa fa-archive" aria-hidden="true"></i></span>
                          <div class="tool">
                            <input value="{!! $item->nama_barang !!}" name="nama_barang" type="text" class="form-control" placeholder="Nama Barang" Required>
                            <div style="clear: both;"></div>
                            <span class="tooltiptext">Nama Barang</span>
                          </div>
                        </div>
                        <div class="input-group mg-b-pro-edt">
                          <span class="input-group-addon"><i class="fa fa-usd" aria-hidden="true"></i></span>
                          <input name="harga" value="{!! $item->harga !!}" type="text" class="form-control" placeholder="Harga Barang" Required>
                        </div>
                        <div class="input-group mg-b-pro-edt">
                          <span class="input-group-addon"><i class="fa fa-usd" aria-hidden="true"></i></span>
                          <input name="harga_agen" value="{!! $item->harga_agen !!}" type="number" class="form-control" placeholder="Harga Barang Supplier" required>
                        </div>
                        <div class="input-group mg-b-pro-edt">
                          <span class="input-group-addon"><i class="fa fa-archive" aria-hidden="true"></i></span>
                          <input value="{!! $item->ukuran !!}" name="ukuran" type="text" class="form-control" placeholder="Ukuran Barang" Required>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                      <div class="review-content-section">
                        <div class="input-group mg-b-pro-edt">
                          <span class="input-group-addon"><i class="fa fa-archive" aria-hidden="true"></i></span>
                          <input value="{!! $item->warna !!}" name="warna" type="text" class="form-control" placeholder="Warna Barang" Required>
                        </div>
                        <div class="input-group mg-b-pro-edt">
                          <span class="input-group-addon"><i class="fa fa-archive" aria-hidden="true"></i></span>
                          <input value="{!! $item->stok_barang !!}" name="stok_barang" type="number" class="form-control" placeholder="Stok Barang" Required>
                        </div>
                        <div class="input-group mg-b-pro-edt">
                          <span class="input-group-addon"><i class="fa fa-camera" aria-hidden="true"></i></span>
                          <input type="file" name="foto" class="form-control" placeholder="Gambar Barang" required>
                        </div>
                      </div>
                    </div>
                  </div>


                  <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <div class="text-center custom-pro-edt-ds">
                        <button type="submit" class="btn btn-ctl-bt waves-effect waves-light m-r-10">Save
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection