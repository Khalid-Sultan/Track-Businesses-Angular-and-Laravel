<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OperatingSector extends Model
{
    protected $table = 'operating_sectors';
    protected $fillable = [
        'identification', 'name'
    ];
}
