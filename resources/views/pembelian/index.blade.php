@extends('layout-admin.main')

@section('tabel')
<div class="product-status mg-b-30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap">
                    <h4>Tabel Pembelian</h4>
                    <div class="add-product">
                        <a href="barang/create">Barang Baru</a>
                    </div>
                    @if(session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status')}}
                        </div>
                    @endif
                    <div class="col-md-9 col-md-9 col-sm-9 col-xs-12">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="hpanel mt-b-30">
                                    <div class="panel-body file-body file-cs-ctn">
                                        <i class="fa fa-file-pdf-o text-info"></i>
                                    </div>
                                    <div class="panel-footer">
                                        <a href="#">gambar</a>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                    <table>
                        @foreach($barang as $item)
                        <tr>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    <div class="custom-pagination">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
