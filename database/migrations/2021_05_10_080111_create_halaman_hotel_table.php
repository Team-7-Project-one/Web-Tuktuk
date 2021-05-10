<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHalamanHotelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('halaman_hotel', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_hotel');
            $table->string('nama_hotel');
            $table->string('gambar1');
            $table->string('gambar2');
            $table->string('gambar3');
            $table->string('lokasi');
            $table->string('map');
            $table->string('deskripsi');
            $table->integer('rating');
            $table->integer('kontak');
            $table->integer('harga');
            $table->integer('link');
            $table->string('fasilitas');
            $table->string('komentar');
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
        Schema::dropIfExists('halaman_hotel');
    }
}
