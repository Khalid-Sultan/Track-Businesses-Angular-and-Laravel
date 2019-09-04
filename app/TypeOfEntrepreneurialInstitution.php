<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeOfEntrepreneurialInstitution extends Model
{
    protected $table = 'type_of_entrepreneurial_institutions';
    protected $fillable = [
        'identification','name'
    ];

}
