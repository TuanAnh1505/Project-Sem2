<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Baiviet extends Model
{
    use HasFactory;

    protected $table = 'baiviet';
    protected $primaryKey = 'id_bv';
    protected $fillable = ['tenbv', 'tinvt', 'anhbv', 'tinct'];
}

