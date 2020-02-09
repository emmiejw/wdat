<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnyAction extends Model
{
    

    public function donors()
    {
        $this->belongsTo(Donor::class);
    }
}
