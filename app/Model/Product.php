<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
            protected $fillable = [
            'product_name',
        'sku',
        'price',
        'qty',
        'description',
        'color',
        'size',
        'brands',
        'category',
        'store',
        'availability',
         'isActive'
    ];

    protected $table = 'products';

    public $primaryKey = 'product_id';

    public $timestamps = true;
}
