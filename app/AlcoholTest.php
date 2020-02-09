<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AlcoholTest extends Model
{
    
    public function donors()
    {
        $this->belongsTo(Donor::class);
    }
}
