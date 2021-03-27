@extends('layout-admin.main')

@section('tabel')
<div class="product-status mg-b-30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap">
                    <h4>Tabel Pelanggan</h4>
                    <div class="add-product">
                        <a href="/pelanggan/create">Tambah Pelanggan</a>
                    </div>
                    <table>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Action</th>
                        </tr>
                        @foreach($pelanggan as $item)
                        <tr>
                            <td>1</td>
                            <td>{{$item->nama}}</td>
                            <td>{{$item->alamat}}</td>
                            <td>
                                <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i
                                        class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i
                                        class="fa fa-trash-o" aria-hidden="true"></i></button>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    <div class="custom-pagination">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
