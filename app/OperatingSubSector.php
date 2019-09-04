<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OperatingSubSector extends Model
{
    protected $table = 'operating_sub_sectors';
    protected $fillable = [
        'identification', 'name'
    ];
}
