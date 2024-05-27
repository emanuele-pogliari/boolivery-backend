<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['total_price', 'customer_name', 'customer_last_name', 'customer_address', 'customer_email', 'customer_phone'];
    public function dishes()
    {
        return $this->hasMany(Dish::class);
    }
}
