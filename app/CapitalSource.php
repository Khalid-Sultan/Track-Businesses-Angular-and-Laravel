<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CapitalSource extends Model
{
    protected $table = 'capital_sources';
    protected $fillable = [
        'identification','name'
    ];
}
