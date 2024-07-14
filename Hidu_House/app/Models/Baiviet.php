<?php

// Trong app/Models/Baiviet.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Baiviet extends Model
{
    use HasFactory;

    protected $table = 'baiviet'; // Tên bảng
    protected $fillable = ['tenbv', 'tinvt', 'anhbv', 'tinct']; // Các cột trong bảng
}
