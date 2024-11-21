<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class ComponentsOrders extends Model
{
    use HasFactory;

    protected $fillable=[
        'order_id',
        'component_id',
        'quantity',
        'total'
    ];

    public function order(){
        return $this->belongsTo(Order::class,'order_id');
    }

    public function component(){
        return $this->belongTo(Component::class,'component_id');
    }
}

    