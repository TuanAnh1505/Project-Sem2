<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $table = 'user';
    protected $primaryKey = 'UserID';

    public function address()
    {
        return $this->belongsTo(Address::class, 'AddressID');
    }

    public function orders()
    {
        return $this->hasMany(Order::class, 'UserID');
    }

    public function payment()
    {
        return $this->hasMany(Payment::class, 'UserID');
    }
}
