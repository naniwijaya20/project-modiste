<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    //
    protected $table='pelanggan';
    protected $fillable = [
        'nama','no_hp','email','alamat','user_name','password','konfirmasi_password'
    ];
}
