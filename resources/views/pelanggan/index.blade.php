@extends('layout-admin.main')
@section('judul', 'Pelanggan')

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
                            <th>No_Hp</th>
                            <th>Email</th>
                            <th>Alamat</th>
                            <th>User_Name</th>
                            <th>Password</th>
                            <th>Konfirmasi_password</th>
                            <th>Action</th>
                        </tr>
                        <?php $no = 1 ;
                        $total = 0;
                        $totalSemua = 0;
                        ?>
                        @foreach($pelanggan as $item)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{$item->nama}}</td>
                            <td>{{$item->no_hp}}</td>
                            <td>{{$item->email}}</td>
                            <td>{{$item->alamat}}</td>
                            <td>{{$item->user_name}}</td>
                            <td>{{$item->password}}</td>
                            <td>{{$item->konfirmasi_password}}</td>
                            <td>
                            
                                <form action="{{route('pelanggan.destroy',$item->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <!-- <a href="pelanggan/{!!$item->id!!}"> -->
                                        <a href="pelanggan/{!!$item->id!!}/edit" data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                    <!-- </a> -->
                                    <button type="submit" data-toggle="tooltip" title="Trash" class="pd-setting-ed">
                                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                                    </button>
                                </form>
                                    
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    <!-- <div class="custom-pagination">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
