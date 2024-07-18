<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $table = 'payment';
    protected $primaryKey = 'PaymentID';

    public function paymentMethod()
    {
        return $this->belongsTo(PaymentMethod::class, 'MethodID');
    }
}
