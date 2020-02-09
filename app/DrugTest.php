<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DrugTest extends Model
{
    protected $fillable = [
        'donor_id',
        'temp',
        'kit_no',
        'kit_exp_date', 
    ];

    public function donors()
    {
        $this->belongsTo(Donor::class);
    }
}
