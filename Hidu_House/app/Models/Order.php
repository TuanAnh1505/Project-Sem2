<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';
    protected $primaryKey = 'Id';

    public function user()
    {
        return $this->belongsTo(User::class, 'UserID');
    }

    public function shipping()
    {
        return $this->belongsTo(Shipping::class, 'ShippingID');
    }

    public function voucher()
    {
        return $this->belongsTo(Voucher::class, 'VoucherID');
    }

    public function payment()
    {
        return $this->belongsTo(Payment::class, 'PaymentID');
    }

    public function status()
    {
        return $this->belongsTo(Status::class, 'StatusID');
    }

    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class, 'OrderID');
    }
}
