<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EnterpriseArchitectureSource extends Model
{
    protected $table = 'enterprise_architecture_sources';
    protected $fillable = [
        'identification', 'name'
    ];
}
