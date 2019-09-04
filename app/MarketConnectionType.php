<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MarketConnectionType extends Model
{

    protected $table = 'market_connection_types';
    protected $fillable = [
        'identification', 'name'
    ];
}
