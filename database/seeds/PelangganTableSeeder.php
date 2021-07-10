<?php

use Illuminate\Database\Seeder;
use App\Pelanggan;

class PelangganTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pelanggan = new Pelanggan();
        $pelanggan->nama = 'Bambang';
        $pelanggan->no_hp = '08123456789';
        $pelanggan->email = 'Bambangselaludidepan@gmail.com';
        $pelanggan->alamat = 'Jl.SultanHasanuddin ';
        $pelanggan->user_name = 'Bambang';
        $pelanggan->password = '12345678';
        $pelanggan->konfirmasi_password = '12345678';
        $pelanggan->save();

        $pelanggan1 = new Pelanggan();
        $pelanggan1->nama = 'Kurnia';
        $pelanggan1->no_hp = '08123456798';
        $pelanggan1->email = 'Kur@gmail.com';
        $pelanggan1->alamat = 'Jl.kematian';
        $pelanggan1->user_name = 'Kurnia';
        $pelanggan1->password = '87654321';
        $pelanggan1->konfirmasi_password = '87654321';
        $pelanggan1->save();

        $pelanggan2 = new Pelanggan();
        $pelanggan2->nama = 'Sari Putri';
        $pelanggan2->no_hp = '08123456987';
        $pelanggan2->email = 'sariputrilancar@gmail.com';
        $pelanggan2->alamat = 'Jl.Kesuksesan ';
        $pelanggan2->user_name = 'Sari';
        $pelanggan2->password = '1234567890';
        $pelanggan2->konfirmasi_password = '1234567890';
        $pelanggan2->save();
        //
    }
}
