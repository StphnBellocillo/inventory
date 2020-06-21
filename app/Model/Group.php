<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = [
        'group_name',
        'isActive'
    ];

    protected $table = 'groups';

    public $primaryKey = 'group_id';

             public $timestamps = true;
}
