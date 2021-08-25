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

    public function barangs()
    {
        return $this->belongsTo('App\Barang', 'barang_id');
    }

    public function pelanggans()
    {
        return $this->belongsTo('App\Pelanggan', 'pelanggan_id');
    }

    public function penjualans()
    {
        return $this->belongsTo('App\Penjualan', 'penjualan_id');
    }

}
