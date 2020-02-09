<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DrugTest extends Model
{
    
    public function donors()
    {
        $this->belongsTo(Donor::class);
    }
}
