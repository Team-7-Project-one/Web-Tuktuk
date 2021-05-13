<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Souvenir extends Model
{
    use HasFactory;
    protected $table = 'halaman_souvenir';

    protected $fillable = ['id', 'id_souvenir', 'nama_souvenir', 'nama_toko', 'bahan', 'tipe', 'ukuran', 'warna', 'harga', 'kontak', 'link', 'lokasi', 'gambar1', 'gambar2', 'gambar3', 'deskripsi', 'komentar'];

    protected $primaryKey = 'id';
}
