<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enterprise extends Model
{
    protected $table = 'enterprises';
    protected $fillable = [
        'identification',
        'EnterpriseName',

        'type_of_entrepreneurial_institutions',

        'address_zones',
        'zone',
        'kebele',
        'address_scopes',
        'location_identity',
        'house_number',
        'phone_number',

        'age_of_establishment',

        'operating_sectors',
        'operating_sub_sectors',
        'enterprise_type_by_definitions',
        'organizational_types',

        'tax_payer_id',
        'organizations',
        'institutional_statuses',
        'institutional_reasons',

        'base_capital_size',
        'capital_sources',

        'loan_credit_size',
        'time_of_loan',
        'post_credit_size',
        'refund_credit_size',
        'return_credit_size',
        'time_of_return',

        'time_made_size',
        'time_of_credit_made',

        'enterprise_architecture_sources',
        'hectare_size',
        'rent_per_month',
        'released_time',

        'market_size',
        'market_created_time',
        'market_connection_types',
        'market_connection_creator_institutions',
        'market_connection_creator_markets',

        'enterprise_levels',
        'standard_time',

        'technical_skill',
        'kaiser_service',
        'tech_support',
        'dev_support',
        'recognition',
        'certificate'

    ];

    public function members()
    {
        return $this->hasMany(EnterpriseMember::class);
    }
    //enterprises
}
