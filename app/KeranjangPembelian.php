<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KeranjangPembelian extends Model
{
    protected $table='keranjang_pembelian';
    protected $fillable = [
        'barang_id','pelanggan_id'
    ];
    //
}
