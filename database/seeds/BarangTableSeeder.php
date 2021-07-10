<?php

use Illuminate\Database\Seeder;
use App\Barang;

class BarangTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barang = new Barang();
        $barang->nama_barang = 'Baju Batik';
        $barang->ukuran = 'XL';
        $barang->warna = 'Coklat';
        $barang->harga_agen = 90000;
        $barang->harga = 100000;
        $barang->stok_barang = 10;
        $barang->foto = 'gh.jpeg';
        $barang->save();

        $barang1 = new Barang();
        $barang1->nama_barang = 'Jilbab';
        $barang1->ukuran = 'M';
        $barang1->warna = 'Pink';
        $barang1->harga_agen = 25000;
        $barang1->harga = 30000;
        $barang1->stok_barang = 200;
        $barang1->foto = 'aa.jpeg';
        $barang1->save();

        $barang2 = new Barang();
        $barang2->nama_barang = 'Masker';
        $barang2->ukuran = 'All Size';
        $barang2->warna = 'Hitam';
        $barang2->harga_agen = 5000;
        $barang2->harga = 10000;
        $barang2->stok_barang = 50;
        $barang2->foto = 'bb.jpeg';
        $barang2->save();

        $barang3 = new Barang();
        $barang3->nama_barang = 'Dress';
        $barang3->ukuran = 'XL';
        $barang3->warna = 'Merah';
        $barang3->harga_agen = 250000;
        $barang3->harga = 300000;
        $barang3->stok_barang = 10;
        $barang3->foto = 'cc.jpeg';
        $barang3->save();
        
    }
        //
    
}
