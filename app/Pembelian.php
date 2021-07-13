<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    protected $table='pembelian';
    protected $fillable = [
        'tanggal', 'total'
    ];

    // public function barang()
    // {
    //     return $this->belongsToMany('App\Barang');
    // }
    //
}
