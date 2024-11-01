<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Component extends Model
{
    use HasFactory;

    protected $table = 'components';

    protected $fillable=[
        'serial',
        'description',
        'brand',
        'type',
        'price'
    ];

    protected function serial():Attribute{
        return Attribute::make(
            set: function($value){
                return strtoupper($value);
            }
        );
    }
    protected function brand():Attribute{
        return Attribute::make(
            set: function($value){
                return strtoupper($value);
            }
        );
    }
}
