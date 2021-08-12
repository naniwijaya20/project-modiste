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
              <form action="{{route('pelanggan.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="product-tab-list tab-pane fade active in" id="description">

                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                      <div class="review-content-section">
                        <div class="input-group mg-b-pro-edt">
                          <span class="input-group-addon"><i class="fa fa-archive" aria-hidden="true"></i></span>
                          <input name="nama" type="text" class="form-control" placeholder="Nama" required>
                        </div>
                        <div class="input-group mg-b-pro-edt">
                          <span class="input-group-addon"><i class="fa fa-usd" aria-hidden="true"></i></span>
                          <input name="no_hp" type="number" class="form-control" placeholder="no_hp" required>
                        </div>
                        <div class="input-group mg-b-pro-edt">
                          <span class="input-group-addon"><i class="fa fa-usd" aria-hidden="true"></i></span>
                          <input name="email" type="text" class="form-control" placeholder="email " required>
                        </div>
                        <div class="input-group mg-b-pro-edt">
                          <span class="input-group-addon"><i class="fa fa-usd" aria-hidden="true"></i></span>
                          <input name="alamat" type="text" class="form-control" placeholder="alamat" required>
                        </div>
                        <div class="input-group mg-b-pro-edt">
                          <span class="input-group-addon"><i class="fa fa-archive" aria-hidden="true"></i></span>
                          <input name="user_name" type="text" class="form-control" placeholder="user_name" required>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                      <div class="review-content-section">
                        <div class="input-group mg-b-pro-edt">
                          <span class="input-group-addon"><i class="fa fa-archive" aria-hidden="true"></i></span>
                          <input name="password" type="text" class="form-control" placeholder="password" required>
                        </div>
                        <div class="input-group mg-b-pro-edt">
                          <span class="input-group-addon"><i class="fa fa-archive" aria-hidden="true"></i></span>
                          <input name="konfirmasi_password" type="number" class="form-control" placeholder="konfirmasi_password" required>
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