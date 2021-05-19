<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SouvenirComment extends Model
{
    use HasFactory;
    protected $table="souvenircomments";
    protected $fillable = ['id', 'name', 'comment'];
}
