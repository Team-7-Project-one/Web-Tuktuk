<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotelComment extends Model
{
    use HasFactory;
    protected $table="hotelcomments";
    protected $fillable = ['id', 'name', 'comment'];
}
