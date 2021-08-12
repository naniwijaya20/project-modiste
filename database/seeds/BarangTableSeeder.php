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
        $barang->nama_barang = 'Mukena';
        $barang->ukuran = 'All Size';
        $barang->warna = 'Tiffany';
        $barang->harga_agen = 230000;
        $barang->harga = 300000;
        $barang->stok_barang = 8;
        $barang->foto = 'A1.jpeg';
        $barang->save();

        $barang1 = new Barang();
        $barang1->nama_barang = 'Mukena';
        $barang1->ukuran = 'All Size';
        $barang1->warna = 'MidNight';
        $barang1->harga_agen = 230000;
        $barang1->harga = 300000;
        $barang1->stok_barang = 10;
        $barang1->foto = 'A2.jpeg';
        $barang1->save();

        $barang2 = new Barang();
        $barang2->nama_barang = 'Mukena';
        $barang2->ukuran = 'All Size';
        $barang2->warna = 'Hijau Lemon';
        $barang2->harga_agen = 230000;
        $barang2->harga = 300000;
        $barang2->stok_barang = 5;
        $barang2->foto = 'A3.jpeg';
        $barang2->save();

        $barang3 = new Barang();
        $barang3->nama_barang = 'Mukena';
        $barang3->ukuran = 'All Size';
        $barang3->warna = 'Pink';
        $barang3->harga_agen = 100000;
        $barang3->harga = 180000;
        $barang3->stok_barang = 6;
        $barang3->foto = 'B1.jpeg';
        $barang3->save();

        $barang3 = new Barang();
        $barang3->nama_barang = 'Mukena';
        $barang3->ukuran = 'All Size';
        $barang3->warna = 'Cloudia Pink';
        $barang3->harga_agen = 100000;
        $barang3->harga = 180000;
        $barang3->stok_barang = 4;
        $barang3->foto = 'B2.jpeg';
        $barang3->save();
        

        $barang3 = new Barang();
        $barang3->nama_barang = 'Baju Batik Lengan Pendek';
        $barang3->ukuran = 'All Size';
        $barang3->warna = 'Biru Navy';
        $barang3->harga_agen = 65000;
        $barang3->harga = 150000;
        $barang3->stok_barang = 1;
        $barang3->foto = '1.jpeg';
        $barang3->save();

        $barang3 = new Barang();
        $barang3->nama_barang = 'Baju Batik Lengan Pendek';
        $barang3->ukuran = 'All Size';
        $barang3->warna = 'Krem';
        $barang3->harga_agen = 65000;
        $barang3->harga = 150000;
        $barang3->stok_barang = 2;
        $barang3->foto = '2.jpeg';
        $barang3->save();

        $barang3 = new Barang();
        $barang3->nama_barang = 'Baju Batik Lengan Pendek';
        $barang3->ukuran = 'All Size';
        $barang3->warna = 'Coklat';
        $barang3->harga_agen = 65000;
        $barang3->harga = 150000;
        $barang3->stok_barang = 3;
        $barang3->foto = '3.jpeg';
        $barang3->save();

        $barang3 = new Barang();
        $barang3->nama_barang = 'Baju Batik Lengan Pendek';
        $barang3->ukuran = 'All Size';
        $barang3->warna = 'Biru';
        $barang3->harga_agen = 65000;
        $barang3->harga = 150000;
        $barang3->stok_barang = 5;
        $barang3->foto = '4.jpeg';
        $barang3->save();

        $barang3 = new Barang();
        $barang3->nama_barang = 'Baju Batik Lengan Pendek';
        $barang3->ukuran = 'All Size';
        $barang3->warna = 'Hijau';
        $barang3->harga_agen = 65000;
        $barang3->harga = 150000;
        $barang3->stok_barang = 4;
        $barang3->foto = '5.jpeg';
        $barang3->save();

        $barang3 = new Barang();
        $barang3->nama_barang = 'Baju Batik Lengan Panjang';
        $barang3->ukuran = 'All Size';
        $barang3->warna = 'Maroon';
        $barang3->harga_agen = 100000;
        $barang3->harga = 180000;
        $barang3->stok_barang = 1;
        $barang3->foto = '6.jpeg';
        $barang3->save();

        $barang3 = new Barang();
        $barang3->nama_barang = 'Baju Batik Lengan Panjang';
        $barang3->ukuran = 'All Size';
        $barang3->warna = 'Coklat';
        $barang3->harga_agen = 100000;
        $barang3->harga = 180000;
        $barang3->stok_barang = 2;
        $barang3->foto = '7.jpeg';
        $barang3->save();
        
    }
        //
    
}
