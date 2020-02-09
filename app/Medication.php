<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medication extends Model
{
    
    public function donors()
    {
        $this->belongsTo(Donor::class);
    }
}
