<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InstitutionalReason extends Model
{
    protected $table = 'institutional_reasons';
    protected $fillable = [
        'identification', 'name'
    ];
}
