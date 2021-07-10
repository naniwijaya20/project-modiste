<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            BarangTableSeeder::class, 
            PelangganTableSeeder::class,
            SupplierTableSeeder::class,
            PembelianTableSeeder::class,
            PenjualanTableSeeder::class,
        ]);
    }
}
