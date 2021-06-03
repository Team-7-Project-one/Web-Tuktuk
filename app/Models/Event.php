<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $table = 'halaman_event';

    protected $fillable = ['id', 'id_event', 'nama_event', 'kategori', 'tgl_pelaksanaan', 'tgl_selesai', 'harga', 'lokasi', 'gambar', 'map','deskripsi', 'komentar'];

    protected $primaryKey = 'id';
}
