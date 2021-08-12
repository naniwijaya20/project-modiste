@extends('layout-admin.main')

@section('tabel')
<div class="product-status mg-b-30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap">
                    <h4>Tabel Barang</h4>
                    <div class="add-product">
                        <a href="barang/create">Tambah Barang</a>
                    </div>
                    @if(session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status')}}
                        </div>
                    @endif
                    <table>
                        <tr>
                            <th>No</th>
                            <th>Nama Barang</th>
                            <th>Harga Barang</th>
                            <th>Harga Supplier</th>
                            <th>Ukuran Barang</th>
                            <th>Warna Barang</th>
                            <th>Stok Barang</th>
                            <th>Gambar barang</th>
                            <th>Action</th>
                        </tr>
                        <?php $no = 1 ;
                        $total = 0;
                        $totalSemua = 0;
                        ?>
                        @foreach($barang as $item)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{$item->nama_barang}}</td>
                            <td>{{$item->harga}}</td>
                            <td>{{$item->harga_agen}}</td>
                            <td>{{$item->ukuran}}</td>
                            <td>{{$item->warna}}</td>
                            <td>{{$item->stok_barang}}</td>
                            <td><img src="{{asset('img/barang/' . $item->foto . '')}}" alt=""></td>
                            <td>

                                <form action="{{route('barang.destroy',$item->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <!-- <a href="barang/{!!$item->id!!}"> -->
                                        <a href="barang/{!!$item->id!!}/edit" data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                    <!-- </a> -->
                                    <button type="submit" data-toggle="tooltip" title="Trash" class="pd-setting-ed">
                                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                                    </button>
                                </form>

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
