<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrganizationalType extends Model
{
    protected $table = 'organizational_types';
    protected $fillable = [
        'identification', 'name'
    ];
}
