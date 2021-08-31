<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    //
    protected $table='supplier';

    protected $fillable = [
        'nama_agen', 'alamat'
    ];

    public function detailPembelian()
    {
        return $this->hasMany('App\DetailPembelian');
    }
}
