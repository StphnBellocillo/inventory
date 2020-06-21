<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'company_name',
        'charge_amount',
        'var_charge_percentage',
        'address',
        'phone',
        'country',
        'message',
        'currency',
        'isActive'
    ];

    protected $table = 'companies';

    public $primaryKey = 'company_id';

    public $timestamps = true;
}
