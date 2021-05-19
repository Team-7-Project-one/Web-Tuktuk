<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventComment extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table="eventcomments";
    protected $fillable = ['id', 'name', 'comment'];
}
