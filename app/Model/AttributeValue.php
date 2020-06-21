<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class AttributeValue extends Model
{
       //
     protected $fillable = [
        'attribute_value_name',
        'isActive'
    ];

    protected $table = 'attribute_values';

    public $primaryKey = 'attribute_value_id';

    public $timestamps = true;

}
