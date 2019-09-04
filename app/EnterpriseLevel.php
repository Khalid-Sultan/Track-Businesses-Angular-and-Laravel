<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EnterpriseLevel extends Model
{
    protected $table = 'enterprise_levels';
    protected $fillable = [
        'identification','name'
    ];
}
