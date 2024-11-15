<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    
    protected $table='clients';

    protected $fillable=[
        'ci',
        'name',
        'phone',
        'email',
        'location',
    ];

    public function bicycles(){
        return $this->hasMany(Bicycle::class);
    }

    public function orders(){
        return $this->hasMany(Order::class);
    }

    public function findByCi($ci){
        return static::where ('ci',$ci)->first();
    }

    protected function name():Attribute{
        return Attribute::make(
            set: function($value){
                return strtoupper($value);
            }
        );
    }
    
}
