<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    //
    protected $fillable = [
        'attribute_name',
        'attribute_value',
        'isActive'
    ];

    protected $table = 'attributes';

    public $primaryKey = 'attribute_id';

    public $timestamps = true;

}
