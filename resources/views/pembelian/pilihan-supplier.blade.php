@extends('layout-admin.main')
@section('judul', 'Pembelian')

@section('tabel')
<div class="product-status mg-b-30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap">
                    <h4>Pilih Supplier</h4>
                     @foreach($suppliers as $supplier)
                     <ul>
                     <a href="/pembelian/{{$supplier->id}}"><li class="alert" role="alert" style="background-color: #fff !important;">{{$supplier->nama_agen}}</li></a>
                     </ul>
                     @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
