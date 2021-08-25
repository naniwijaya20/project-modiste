<?php

namespace App;

use App\Http\Controllers\pembelianController;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    //
    protected $table='barang';

    protected $fillable = [
        'nama_barang', 'ukuran', 'warna','harga', 'harga_agen', 'stok_barang', 'foto'
    ];

    // public function pembelian()
    // {
    //     return $this->belongsToMany('App\Pembelian');
    // }
    public function detailPembelian()
    {
        return $this->hasMany('App\DetailPembelian');
    }
    public function detailPenjualan()
    {
        return $this->hasMany('App\DetailPenjualan');
    }
}
