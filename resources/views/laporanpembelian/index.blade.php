@extends('layout-admin.main')

@section('tabel')
<div class="product-status mg-b-30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap">
                    <form role="form" method="get" action="{{ url('laporan-tanggal') }}">
                        <div class="box-body">

                            <div class="">
                                <label for="exampleInputEmail1" style="color:white;">Dari Tanggal</label>
                                <input type="date" value="{{ $dari }}" name="tanggal" class="form-control datepicker"  placeholder="Dari Tanggal">
                            </div>

                            <div style="margin-top: 20px;">
                                <label for="exampleInputPassword1"  style="color:white;">Sampai Tanggal</label>
                                <input type="date" value="{{ $sampai }}" name="tanggal" class="form-control datepicker" placeholder="Sampai Tanggal">
                            </div>
                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer" style="margin-top: 20px;">
                            <button type="submit" class="btn btn-primary" >Cek</button>

                            <button type="submit" formaction="{{ url('laporan1') }}">Print</button>
                        </div>
                    </form>
                </div>
			</div>
		</div>
	</div>
</div>


<?php
$tottotal = 0;
?>

<div class="product-status mg-b-30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap">
                    <h4>Tabel Laporan</h4>
                    <table class="table table-bordered">
					<thead>
						<tr>
							<th>No</th>
				            <th>Tanggal</th>
        					<th>Total</th>
						</tr>
					</thead>
					<tbody>
							@foreach($all as $e=>$dt)
								<?php $tottotal += $dt->retribusi; ?>
								<tr>
									<td>{{$e + 1 }}</td>
						            <td><?php echo date('d F Y', strtotime($dt->tanggal)); ?></td>
						            <td class="text-left">Rp. {!! number_format($dt->total,2,",",".") !!}</td>
						            
							@endforeach
					</tbody>
					<tbody>
					</tbody>
				</table>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection

@section('scripts')

<script type="text/javascript" src="{{ asset('Chart.js') }}"></script>

<script>
	
</script>

@endsection