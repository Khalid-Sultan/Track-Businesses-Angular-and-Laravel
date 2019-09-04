<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InstitutionalStatus extends Model
{
    protected $table = 'institutional_statuses';
    protected $fillable = [
        'identification', 'name'
    ];
}
