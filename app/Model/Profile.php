<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'user_name',
        'email',
        'first_name',
        'last_name',
        'gender',
        'phone',
        'group',
    ];

    protected $table = 'profiles';

    public $primaryKey = 'profile_id';

    public $timestamps = true;
}
