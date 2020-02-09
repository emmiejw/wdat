<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReasonForTest extends Model
{

    public function donors()
    {
        $this->belongsTo(Donor::class);
    }
}
