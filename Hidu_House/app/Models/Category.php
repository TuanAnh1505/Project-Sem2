<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $primaryKey = 'CategoryID';
    public $incrementing = true;
    protected $keyType = 'int';
    protected $fillable = ['Name', 'anh_dm'];
}
