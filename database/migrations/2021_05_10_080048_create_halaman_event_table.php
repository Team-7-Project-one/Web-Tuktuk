<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHalamanEventTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('halaman_event', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_event');
            $table->string('nama_event');
            $table->string('kategori');
            $table->date('tgl_pelaksanaan');
            $table->date('tgl_selesai');
            $table->string('harga');
            $table->string('lokasi');
            $table->string('gambar');
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
        Schema::dropIfExists('halaman_event');
    }
}
