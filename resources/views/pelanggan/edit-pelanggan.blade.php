@extends('layout-admin.main')
@section('judul', 'Pelanggan')

@section('tabel')
<div class="single-product-tab-area mg-b-30">
  <!-- Single pro tab review Start-->
  <div class="single-pro-review-area">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="review-tab-pro-inner">
            <ul id="myTab3" class="tab-review-design">
              <li class="active"><a href="#description"><i class="icon nalika-edit" aria-hidden="true"></i> Edit Pelanggan</a></li>
            </ul>
            <div id="myTabContent" class="tab-content custom-product-edit">
              @foreach($pelangganEdit as $item)
              <form action="{{route('pelanggan.update',$item->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')

                <div class="product-tab-list tab-pane fade active in" id="description">
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                      <div class="review-content-section">
                        <div class="input-group mg-b-pro-edt">
                          <span class="input-group-addon"><i class="fa fa-archive" aria-hidden="true"></i></span>
                          <div class="tool">
                            <input value="{!! $item->nama !!}" name="nama" type="text" class="form-control" Required>
                            <div style="clear: both;"></div>
                            <span class="tooltiptext">Nama</span>
                          </div>
                        </div>
                        <div class="input-group mg-b-pro-edt">
                          <span class="input-group-addon"><i class="fa fa-usd" aria-hidden="true"></i></span>
                          <input name="no_hp" value="{!! $item->no_hp !!}" type="text" class="form-control" Required>
                        </div>
                        <div class="input-group mg-b-pro-edt">
                          <span class="input-group-addon"><i class="fa fa-usd" aria-hidden="true"></i></span>
                          <input name="email" value="{!! $item->email !!}" type="text" class="form-control" prequired>
                        </div>
                        <div class="input-group mg-b-pro-edt">
                          <span class="input-group-addon"><i class="fa fa-archive" aria-hidden="true"></i></span>
                          <input value="{!! $item->alamat !!}" name="alamat" type="text" class="form-control" Required>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                      <div class="review-content-section">
                        <div class="input-group mg-b-pro-edt">
                          <span class="input-group-addon"><i class="fa fa-archive" aria-hidden="true"></i></span>
                          <input value="{!! $item->user_name !!}" name="user_name" type="text" class="form-control" Required>
                        </div>
                        <div class="input-group mg-b-pro-edt">
                          <span class="input-group-addon"><i class="fa fa-archive" aria-hidden="true"></i></span>
                          <input value="{!! $item->password !!}" name="password" type="number" class="form-control" Required>
                        </div>
                        <div class="input-group mg-b-pro-edt">
                          <span class="input-group-addon"><i class="fa fa-archive" aria-hidden="true"></i></span>
                          <input value="{!! $item->konfirmasi_password !!}" name="konfirmasi_password" type="number" class="form-control" Required>
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