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
        $supplier->nama_agen = 'Sukses Shop';
        $supplier->alamat = 'Jl.kemerdekaan ';
        $supplier->save();

        $supplier1= new Supplier();
        $supplier1->nama_agen = 'Rezeki Bersama';
        $supplier1->alamat = 'Jl.Sei Kledang ';
        $supplier1->save();
        //
    }
}
