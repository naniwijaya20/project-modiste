<html>
<head>
	<title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Laporan Penjualan</h5>
	</center>

	<table class='table table-bordered'>
		<thead>
			<tr>
                <th>No</th>
                <th>Tanggal</th>
        		<th>Total</th>
			</tr>
		</thead>
		<tbody>
			<?php $totalSemua = 0 ?>
			@foreach($data as $e=>$dt)
			<tr>
                <td>{{$e + 1 }} </a> </td>
				<td> <?php echo date('d F Y', strtotime($dt->tanggal)); ?></td>
				<td class="text-left">Rp. {!! number_format($dt->total,2,",",".") !!}</td>
				{{$totalSemua = $totalSemua + $dt->total}}
			</tr>
			@endforeach
		</tbody>
	</table>
	<h4> Total Semua : Rp. {{ number_format( $totalSemua ,2,",",".") }} </h4>
</body>
</html>