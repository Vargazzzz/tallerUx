<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mechanic extends Model
{
    use HasFactory;

    protected $table='mechanics';

    protected $fillable=[
        'ci',
        'name',
        'phone',
        'email',
    ];

    public function orders(){
        return $this->hasMany(Order::class);
    }

    protected function name():Attribute{
        return Attribute::make(
            set: function($value){
                return strtoupper($value);
            }
        );
    }
}
