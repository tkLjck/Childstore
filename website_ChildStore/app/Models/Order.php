<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\OrderItem;

class Order extends Model
{
    use HasFactory;
    protected $table='order';
    protected $fillable =[
            'user_id',
            'fname',
            'lname',
            'email',
            'phone',
            'address1',
            'address2',
            'city',
            'state',
            'country',
            'pincode',
            'total_price',
            'status',
            'message',
            'tracking_no',
    ];

    public function orderItems(){
        return $this->hasMany(OrderItem::class);
    }
}

