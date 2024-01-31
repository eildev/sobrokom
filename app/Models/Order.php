<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function orderBillingDetails(){
        return $this->belongsTo(OrderBillingDetails::class, 'id', 'order_id');
    }
}