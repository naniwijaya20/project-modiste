@extends('layout-admin.main')
@section('tabel')

<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="breadcomb-wp">
                                <div class="breadcomb-icon">
                                    <i class="icon nalika-home"></i>
                                </div>
                                <div class="breadcomb-ctn">
                                    <h2>Dashboard One</h2>
                                    <p>Welcome to Nalika <span class="bread-ntd">Admin Template</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="breadcomb-report">
                                <button data-toggle="tooltip" data-placement="left" title="Download Report"
                                    class="btn"><i class="icon nalika-download"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="product-status mg-b-30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="admin-content analysis-progrebar-ctn res-mg-t-15">
                    <h4 class="text-left text-uppercase"><b>Total Semua Stok Terjual Dan Yang ada</b></h4>
                    <div class="row vertical-center-box vertical-center-box-tablet">
                        <div class="col-xs-3 mar-bot-15 text-left">
                            <!-- <label class="label bg-green">30% <i class="fa fa-level-up" aria-hidden="true"></i></label> -->
                        </div>
                        <div class="col-xs-9 cus-gh-hd-pro">
                            <h2 class="text-right no-margin">{{$totalSemua}}</h2>
                        </div>
                    </div>
                    <!-- <div class="progress progress-mini">
                        <div style="width: 78%;" class="progress-bar bg-green"></div>
                    </div> -->
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="admin-content analysis-progrebar-ctn res-mg-t-15">
                    <h4 class="text-left text-uppercase"><b>Barang</b></h4>
                    <div class="row vertical-center-box vertical-center-box-tablet">
                        <div class="col-xs-3 mar-bot-15 text-left">
                            <!-- <label class="label bg-green">30% <i class="fa fa-level-up" aria-hidden="true"></i></label> -->
                        </div>
                        <div class="col-xs-9 cus-gh-hd-pro">
                            <h2 class="text-right no-margin">{{ $jumlahBarang }}</h2>
                        </div>
                    </div>
                    <!-- <div class="progress progress-mini">
                        <div style="width: 78%;" class="progress-bar bg-green"></div>
                    </div> -->
                </div>
            </div>
            
            
        </div>
    </div>
</div>
<div class="product-status mg-b-30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="admin-content analysis-progrebar-ctn res-mg-t-15">
                    <h4 class="text-left text-uppercase"><b>Total Stok Yang Terjual</b></h4>
                    <div class="row vertical-center-box vertical-center-box-tablet">
                        <div class="col-xs-3 mar-bot-15 text-left">
                            <!-- <label class="label bg-green">30% <i class="fa fa-level-up" aria-hidden="true"></i></label> -->
                        </div>
                        <div class="col-xs-9 cus-gh-hd-pro">
                            <h2 class="text-right no-margin">{{$detailPenjualanStok}} / {{$totalSemua}}</h2>
                        </div>
                    </div>
                    <div class="progress progress-mini">
                        <div style="width: {{ ($detailPenjualanStok/$totalSemua)*100 }}%;" class="progress-bar bg-green"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="admin-content analysis-progrebar-ctn res-mg-t-15">
                    <h4 class="text-left text-uppercase"><b>Total Stok Yang Ada</b></h4>
                    <div class="row vertical-center-box vertical-center-box-tablet">
                        <div class="col-xs-3 mar-bot-15 text-left">
                            <!-- <label class="label bg-green">30% <i class="fa fa-level-up" aria-hidden="true"></i></label> -->
                        </div>
                        <div class="col-xs-9 cus-gh-hd-pro">
                            <h2 class="text-right no-margin">{{$barang}} / {{$totalSemua}}</h2>
                        </div>
                    </div>
                    <div class="progress progress-mini">
                        <div style="width:  {{ ($barang/$totalSemua)*100 }}%;" class="progress-bar bg-green"></div>
                    </div>
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
                    <h4 class="text-left text-uppercase"><b>The Most Pembelian Supplier</b></h4>
                    <table>
                        <thead>
                            <th>No</th>
                            <th>Nama Supplier</th>
                            <th>Total Beli Barang</th>
                            
                        </thead>
                        <?php $no = 1 ;
                        $total = 0;
                        $totalSemua = 0;
                        ?>
                        @foreach($theMostCustomer as $item)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{$item->suppliers->nama_agen}}</td>
                            <td>{{$item->total}}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
            
        </div>
    </div>
</div>

@endsection
