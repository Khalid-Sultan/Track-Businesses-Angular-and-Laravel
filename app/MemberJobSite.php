<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MemberJobSite extends Model
{
    protected $table = 'member_job_sites';
    protected $fillable = [
        'identification', 'name'
    ];
}
