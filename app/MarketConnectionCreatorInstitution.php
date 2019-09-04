<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MarketConnectionCreatorInstitution extends Model
{
    protected $table = 'market_connection_creator_institutions';
    protected $fillable = [
        'identification', 'name'
    ];
}
