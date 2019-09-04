<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MembershipByEZ extends Model
{
    protected $table = 'membership_by_e_z_s';
    protected $fillable = [
        'identification', 'name'
    ];
}
