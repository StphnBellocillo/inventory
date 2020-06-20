<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    //
    protected $fillable = [
        'brand_name',
        'isActive'
    ];

    protected $table = 'brands';

    public $primaryKey = 'brand_id';

    public $timestamps = true;

}
