<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaporanpenjualanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporanpenjualan', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->string('hari');
            $table->date('tanggal');
            $table->string('bulan');
            $table->string('jenisbarang');
            $table->integer('totalpenjualan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('laporanpenjualan');
    }
}
