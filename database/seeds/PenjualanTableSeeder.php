<?php

use Illuminate\Database\Seeder;
use App\Penjualan;

class PenjualanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $penjualan= new Penjualan();
        $penjualan->tanggal = '2021-03-02';
        $penjualan->total = 0;
        $penjualan->save();
        //
    }
}
