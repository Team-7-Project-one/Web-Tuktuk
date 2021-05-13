<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;
    protected $table = 'halaman_hotel';

    protected $fillable = ['id', 'id_hotel', 'nama_hotel', 'gambar1', 'gambar2', 'gambar3','lokasi', 'map', 'deskripsi', 'rating', 'kontak', 'harga', 'link', 'fasilitas',  'komentar'];

    protected $primaryKey = 'id';
}
