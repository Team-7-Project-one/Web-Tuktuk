<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Admin extends Model
{
    use HasFactory;
    protected $table = 'admin';

    protected $fillable = ['id', 'name', 'username', 'email', 'email_verified_at', 'password', 'remember_token', 'subjek', 'created_at', 'updated_at'];

    protected $primaryKey = 'id';
}
