@extends('layout-admin.main')
@section('judul', 'Supplier')


@section('tabel')
<div class="single-product-tab-area mg-b-30">
    <!-- Single pro tab review Start-->
    <div class="single-pro-review-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="review-tab-pro-inner">
                        <ul id="myTab3" class="tab-review-design">
                            <li class="active"><a href="#description"><i class="icon nalika-edit"
                                        aria-hidden="true"></i> Product Edit</a></li>
                        </ul>
                        <div id="myTabContent" class="tab-content custom-product-edit">
                            <form action="{{route('supplier.store')}}" method="POST">
                                @csrf
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="input-group mg-b-pro-edt">
                                                    <span class="input-group-addon"><i class="icon nalika-user"
                                                            aria-hidden="true"></i></span>
                                                    <input name="nama_agen" type="text" class="form-control"
                                                        placeholder="Nama Agen" Required>
                                                </div>
                                                <div class="input-group mg-b-pro-edt">
                                                    <span class="input-group-addon"><i class="icon nalika-edit"
                                                            aria-hidden="true"></i></span>
                                                    <input name="alamat" type="text" class="form-control"
                                                        placeholder="Alamat" Required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="text-center custom-pro-edt-ds">
                                                <button type="submit"
                                                    class="btn btn-ctl-bt waves-effect waves-light m-r-10">Save
                                                </button>
                                                <button type="submit"
                                                    class="btn btn-ctl-bt waves-effect waves-light">Discard
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
