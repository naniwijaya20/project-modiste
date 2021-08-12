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
              <form action="{{route('laporanpembelian.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="product-tab-list tab-pane fade active in" id="description">

                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                      <div class="review-content-section">
                        <div class="input-group mg-b-pro-edt">
                          <span class="input-group-addon"><i class="fa fa-archive" aria-hidden="true"></i></span>
                          <input name="hari" type="text" class="form-control" placeholder="hari" required>
                        </div>
                        <div class="input-group mg-b-pro-edt">
                          <span class="input-group-addon"><i class="fa fa-usd" aria-hidden="true"></i></span>
                          <input name="tanggal" type="date" class="form-control" placeholder="tanggal" required>
                        </div>
                        <div class="input-group mg-b-pro-edt">
                          <span class="input-group-addon"><i class="fa fa-usd" aria-hidden="true"></i></span>
                          <input name="bulan" type="number" class="form-control" placeholder="bulan" required>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                      <div class="review-content-section">
                        <div class="input-group mg-b-pro-edt">
                          <span class="input-group-addon"><i class="fa fa-archive" aria-hidden="true"></i></span>
                          <input name="jenisbarang" type="text" class="form-control" placeholder="jenisbarang" required>
                        </div>

                        <div class="input-group mg-b-pro-edt">
                          <span class="input-group-addon"><i class="fa fa-archive" aria-hidden="true"></i></span>
                          <input name="totalpenjualan" type="number" class="form-control" placeholder="totalpenjualan" required>
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
            <div id="myTabContent" class="tab-content custom-product-edit">
              <form action="{{route('laporanpenjualan.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
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