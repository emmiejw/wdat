<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drug extends Model
{
    protected $fillable = [
        'donor_id',
        'drug_tested',
        'negative',
        'non_negative', 
    ];

    public function donors()
    {
        $this->belongsTo(Donor::class);
    }
}
