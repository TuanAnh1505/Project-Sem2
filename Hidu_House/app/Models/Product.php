<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Define table name if it's not the plural of the model name
    protected $table = 'product';

    // Define fillable attributes if necessary
    protected $fillable = [
        'CategoryID', 'ImageProduct', 'ProductName', 'Price', 'ProductID', 'ttsp'
    ];
}
