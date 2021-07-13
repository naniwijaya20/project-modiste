<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class DetailPembelian extends Model
{
    protected $table='detail_pembelian';

    protected $fillable = [
        'pembelian_id', 'barang_id', 'supplier_id','jumlah'
    ];
    //
    public function barangs()
    {
        return $this->belongsTo('App\Barang', 'barang_id');
    }

    public function suppliers()
    {
        return $this->belongsTo('App\Supplier', 'supplier_id');
    }
}
