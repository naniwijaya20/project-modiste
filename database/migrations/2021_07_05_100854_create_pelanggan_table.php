<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePelangganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelanggan', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->varchar('nama');
            $table->varchar('no_hp');
            $table->varchar('email');
            $table->varchar('alamat');
            $table->varchar('user_name');
            $table->varchar('password');
            $table->varchar('konfirmasi_password');
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
        Schema::dropIfExists('pelanggan');
    }
}
