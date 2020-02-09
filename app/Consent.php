<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consent extends Model
{
    
    public function donors()
    {
        $this->belongsTo(Donor::class);
    }
}
