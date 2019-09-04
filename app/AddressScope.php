<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AddressScope extends Model
{
    protected $table = 'address_scopes';
    protected $fillable = [
        'identification','name'
    ];
}
