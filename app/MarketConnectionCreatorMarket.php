<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MarketConnectionCreatorMarket extends Model
{
    protected $table = 'market_connection_creator_markets';
    protected $fillable = [
        'identification', 'name'
    ];
}
