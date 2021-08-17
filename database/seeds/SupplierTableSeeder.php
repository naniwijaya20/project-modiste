<?php

use Illuminate\Database\Seeder;
use App\Supplier;

class SupplierTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $supplier = new Supplier();
        $supplier->nama_agen = 'Toko Unggul Jaya';
        $supplier->alamat = 'Jl Ps Bong No.6, Bongkaran, Kec. Pabean Cantian, Kota SBY, Jawa Timur 60161 ';
        $supplier->save();

        $supplier1= new Supplier();
        $supplier1->nama_agen = 'Toko Hj.Eti';
        $supplier1->alamat = ' Blok telaga No.RT05/03, Kalianyar, Krangkeng, Kabupaten Indramayu, Jawa Barat 45284 ';
        $supplier1->save();

        $supplier1= new Supplier();
        $supplier1->nama_agen = 'Toko Vidia';
        $supplier1->alamat = ' Wedi Kidul, Wedi, Kec. Kapas, Kabupaten Bojonegoro, Jawa Timur 62181';
        $supplier1->save();
    }
}
