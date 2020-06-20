<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $fillable = [
        'category_name',
        'isActive'
    ];

    protected $table = 'categories';

    public $primaryKey = 'category_id';

    public $timestamps = true;
}
