@extends('layout-admin.main')

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
              <form action="{{route('barang.store')}}" method="POST">
                @csrf
                <div class="product-tab-list tab-pane fade active in" id="description">

                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                      <div class="review-content-section">
                        <div class="input-group mg-b-pro-edt">
                          <span class="input-group-addon"><i class="fa fa-archive" aria-hidden="true"></i></span>
                          <input name="nama_barang" type="text" class="form-control" placeholder="Nama Barang" required>
                        </div>
                        <div class="input-group mg-b-pro-edt">
                          <span class="input-group-addon"><i class="fa fa-usd" aria-hidden="true"></i></span>
                          <input name="harga" type="number" class="form-control" placeholder="Harga Barang" required>
                        </div>
                        <div class="input-group mg-b-pro-edt">
                          <span class="input-group-addon"><i class="fa fa-usd" aria-hidden="true"></i></span>
                          <input name="harga_agen" type="number" class="form-control" placeholder="Harga Barang Supplier" required>
                        </div>
                        <div class="input-group mg-b-pro-edt">
                          <span class="input-group-addon"><i class="fa fa-archive" aria-hidden="true"></i></span>
                          <input name="ukuran" type="text" class="form-control" placeholder="Ukuran Barang" required>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                      <div class="review-content-section">
                        <div class="input-group mg-b-pro-edt">
                          <span class="input-group-addon"><i class="fa fa-archive" aria-hidden="true"></i></span>
                          <input name="warna" type="text" class="form-control" placeholder="Warna Barang" required>
                        </div>
                        <div class="input-group mg-b-pro-edt">
                          <span class="input-group-addon"><i class="fa fa-archive" aria-hidden="true"></i></span>
                          <input name="stok_barang" type="number" class="form-control" placeholder="Stok Barang" required>
                        </div>
                        <div class="input-group mg-b-pro-edt">
                          <span class="input-group-addon"><i class="fa fa-camera" aria-hidden="true"></i></span>
                          <input type="file" class="form-control" placeholder="Gambar Barang">
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
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection