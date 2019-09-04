<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EnterpriseMember extends Model
{
    protected $table = 'enterprise_members';
    protected $fillable = [
        'enterprises',
        'name',
        'gender',
        'age',
        'member_levels',

        'trained_career',
        'member_job_sites',

        'job_search',

        'job_search_registered',

        'awareness_training',
        'professional_training',
        'professional_evaluation',
        'professional_eval_eligibility',

        'disabled',
        'persecuted',
        'living_with_aids',
        'displaced',
        'happiness',

        'membership_by_e_z_s',

        'nation',
        'phone_number',
        'member_job_types',
        'salary_amount',
        'employement_period',
        'lasting_months'
    ];
}
