<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MemberLevel extends Model
{
    protected $table = 'member_levels';
    protected $fillable = [
        'identification', 'name'
    ];
}
