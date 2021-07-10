<?php

use Illuminate\Database\Seeder;
use App\Pembelian;

class PembelianTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pembelian= new Pembelian();
        $pembelian->tanggal = '2021-01-04';
        $pembelian->total = 0;
        $pembelian->save();
        //
    }
}
