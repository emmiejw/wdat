<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProofOfId extends Model
{
    
    public function donors()
    {
        $this->belongsTo(Donor::class);
    }
}
