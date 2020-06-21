<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'customer_name',
        'customer_address',
        'customer_phone',
        'product_name',
        'qty',
        'rate',
        'amount',
        'gross_amount',
        'vat',
        'discount',
        'net_amount'
    ];

    protected $table = 'orders';

    public $primaryKey = 'order_id';

    public $timestamps = true;

}
