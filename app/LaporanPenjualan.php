<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LaporanPenjualan extends Model
{
    protected $table='laporanpenjualan';
    protected $fillable = [
        'id', 'bulanan'
    ];
    //
}
