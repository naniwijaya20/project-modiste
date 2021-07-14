<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailPenjualan extends Model
{
    protected $table='detail_penjualan';
    protected $fillable = [
        'penjualan_id', 'pelanggan_id', 'barang_id','jumlah', 'total'
    ];
    //
}
