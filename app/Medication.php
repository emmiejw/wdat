<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medication extends Model
{
    protected $fillable = [
        'donor_id',
        'medication',
        'dose',
    ];
    
    public function donors()
    {
        $this->belongsTo(Donor::class);
    }
}
