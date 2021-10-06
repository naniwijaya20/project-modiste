@extends('layout-admin.main')
@section('judul', 'Supplier')

@section('tabel')
<form action="{{route('pembelian.store')}}" method="POST" enctype="multipart/form-data">
@csrf

<input name="tanggal" type="hidden" class="form-control" value="<?= date('Y-m-d') ?>" hidden>
<div class="product-status mg-b-30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap">
                    <h4>Tabel Supplier</h4>
                    <div class="add-product">
                        <button id="addRow">Tambah</button>

                    </div>
                    
                    <table  id="example" class="display"> 
                      <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Supplier</th>
                            <th>Nama Barang</th>
                            <th>Jumlah Barang</th>
                        </tr>
                      </thead>
                        <?php
                        $totalSemua = 0;
                        ?>
                        <tbody>
                          
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="product-status mg-b-30">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
          <div class="product-status-wrap">

            <button type="submit" class="btn btn-primary" style="color:white">Masukan Transaksi
            </button>
            
          </div>
        </div>
        <!-- <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
          <div class="product-status-wrap">
            <div>
                <p style="color: orange;">Jumlah total yang dibayar yaitu RP </p>
            </div>
          </div>
        </div> -->
      </div>
    </div>
  </div>
</form>


@endsection

@push('dataTables')
<script>
  $(document).ready(function() {
    $('table').dataTable({searching: false, paging: false, info: false});
    var t = $('#example').DataTable();
    var counter = 1;
 
    $('#addRow').on( 'click', function () {
      console.log('dsad')

        t.row.add( [
            counter,
            `<select name="namaSupplier[]" type="text" class="form-control" placeholder="Nama Barang" required>
                                <option value="" hidden>Nama Supplier</option>
                                @foreach($suppp as $sup)
                                <option value="{{$sup->id}}">{{$sup->nama_agen}}</option>
                                @endforeach` ,
            `<select name="namaBarang[]" type="text" class="form-control" placeholder="Nama Barang" required>
                                <option value="" hidden>Nama Barang</option>
                                @foreach($barangs as $barang)
                                <option value="{{$barang->id}}">{{$barang->nama_barang}} | {{$barang->harga_agen}}  | {{$barang->ukuran}} | {{$barang->warna}} </option>
                                @endforeach  
                                </select>`,
            `<input name="jumlahBarang[]" type="number" class="form-control" placeholder="Jumlah" required>` 
        ] ).draw( false );
 
        counter++;
    } );
 
    // Automatically add a first row of data
    $('#addRow').click();
} );
</script>
@endpush
