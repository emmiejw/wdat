<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReasonForTest extends Model
{
    protected $fillable = [
        'donor_id',
        'reason',
    ];

    public function donors()
    {
        $this->belongsTo(Donor::class);
    }
}
