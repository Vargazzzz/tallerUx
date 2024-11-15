<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bicycle extends Model
{
    use HasFactory;

    protected $table = 'bicycles';

    protected $fillable=[
        'serial',
        'type',
        'model',
        'brand',
        'color',
        'client_id'
    ];


    public function client(){
        return $this->belongsto(Client::class);
    }

    public function orders(){
        return $this->hasMany(Order::class);
    }

    protected function serial():Attribute{
        return Attribute::make(
            set: function($value){
                return strtoupper($value);
            }
        );
    }
    protected function model():Attribute{
        return Attribute::make(
            set: function($value){
                return strtoupper($value);
            }
        );
    }
}
