<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    protected $fillable=[
        'n_order',
        'client_id',
        'bicycle_id',
        'mechanic_id',
        'status'
    ];

    public function bicycle(){
        return $this->belongsto(Bicycle::class);
    }

    public function client(){
        return $this->belongsto(Client::class);
    }

    public function mechanic(){
        return $this->belongsto(Mechanic::class);
    }

    public function component(){
        return $this->hasMany(Component::class,'components_orders')->withPivot('quantity', 'total')->withTimestamps();
    }
}
