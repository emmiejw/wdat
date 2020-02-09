<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnyAction extends Model
{
    protected $fillable = [
        'donor_id',
        'no_action',
        'non_negatives',
        'lab_test_request',
        'additional_info',
        'testers_signature',
    ];

    public function donors()
    {
        $this->belongsTo(Donor::class);
    }
}
