<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LaporanPembelian extends Model
{
    protected $table='laporanpembelian';
    protected $fillable = [
        'no', 'hari', 'tanggal', 'bulan', 'jenisbarang', 'totalpenjualan'
    ];
    //
}
