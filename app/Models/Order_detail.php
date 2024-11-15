<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_detail extends Model
{
    use HasFactory;

    protected $table = 'order_detail';

    public function order(){
        return $this->belongsto(Order::class);
    }

    public function component(){
        return $this->belongsto(Component::class);
    }
}
