<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consent extends Model
{
    protected $fillable = [
        'donor_id',
        'sample_sig',
        'test_date',
    ];
    public function donors()
    {
        $this->belongsTo(Donor::class);
    }
}
