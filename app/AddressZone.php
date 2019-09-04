<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AddressZone extends Model
{
    protected $table = 'address_zones';
    protected $fillable = [
        'identification','name'
    ];
}
