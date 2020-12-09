<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cs extends Model
{
    use HasFactory;
    protected $table = 'users';
    protected $fillable = ['id', 'nama_user', 'email', 'password','manajer', 'remember_token','created_at', 'updated_at'];
}
