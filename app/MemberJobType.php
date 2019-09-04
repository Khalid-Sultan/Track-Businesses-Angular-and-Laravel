<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MemberJobType extends Model
{
    protected $table = 'member_job_types';
    protected $fillable = [
        'identification', 'name'
    ];
}
