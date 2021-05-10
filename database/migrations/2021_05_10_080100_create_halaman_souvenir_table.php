<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHalamanSouvenirTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('halaman_souvenir', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_souvenir');
            $table->string('nama_souvenir');
            $table->string('nama_toko');
            $table->string('bahan');
            $table->string('tipe');
            $table->string('ukuran');
            $table->string('warna');
            $table->string('harga');
            $table->string('kontak');
            $table->string('link');
            $table->string('lokasi');
            $table->string('gambar1');
            $table->string('gambar2');
            $table->string('gambar3');
            $table->string('deskripsi');
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
        Schema::dropIfExists('halaman_souvenir');
    }
}
