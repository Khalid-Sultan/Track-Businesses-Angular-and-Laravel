<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EnterpriseTypeByDefinition extends Model
{
    protected $table = 'enterprise_type_by_definitions';
    protected $fillable = [
        'identification', 'name'
    ];
}
