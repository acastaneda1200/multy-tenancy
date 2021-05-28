<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    
    protected $fillable = [
        'name',
        'price',
    ];
}
