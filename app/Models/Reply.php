<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    use HasFactory;
    protected $table="replies";
    protected $fillable = ['id', 'name', 'comment', 'comment_id'];

    public function Comment() 
    {
        return $this->belongsTo('App\Models\Comment', 'comment_id');
    }
}
