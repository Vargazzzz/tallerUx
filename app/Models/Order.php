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
        return $this->belongsTo(Bicycle::class);
    }

    public function client(){
        return $this->belongsTo(Client::class);
    }

    public function mechanic(){
        return $this->belongsTo(Mechanic::class);
    }

    public function components(){
        return $this->belongsToMany(Component::class,'components_orders')->withPivot('quantity', 'total')->withTimestamps();
    }

    public function getTotalCostAttribute(){
        return $this->components->sum('pivot.total');
    }
}
