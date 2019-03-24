<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    protected $fillable = [
        'name',
        'company',
        'phone',
        'email',
        'industryType',
        'noEmployees',
        'frequencyOfTesting'
    ];

  
    public function results(){
        return $this->hasMany(Results::class);
    }
    
}
