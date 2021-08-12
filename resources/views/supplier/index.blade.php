@extends('layout-admin.main')
@section('tabel')
<div class="product-status mg-b-30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap">
                    <h4>Tabel Supplier</h4>
                    <div class="add-product">
                        <a href="supplier/create">Tambah Suplier</a>
                    </div>
                    <table>
                        <tr>
                            <th>No</th>
                            <th>Nama Agen</th>
                            <th>Alamat</th>
                            <th>Action</th>
                        </tr>
                        <?php $no = 1 ;
                        $total = 0;
                        $totalSemua = 0;
                        ?>
                        @foreach($supplier as $item)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{$item->nama_agen}}</td>
                            <td>{{$item->alamat}}</td>
                            <td>
                                <form action="{{route('supplier.destroy',$item->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <!-- <a href="barang/{!!$item->id!!}"> -->
                                    <a href="supplier/{!!$item->id!!}/edit" data-toggle="tooltip" title="Edit"
                                        class="pd-setting-ed"><i class="fa fa-pencil-square-o"
                                            aria-hidden="true"></i></a>
                                    <!-- </a> -->
                                    <button type="submit" data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i
                                            class="fa fa-trash-o" aria-hidden="true"></i></button>
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
