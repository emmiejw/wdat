<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AlcoholTest extends Model
{
    protected $fillable = [
        'donor_id',
        'consumption',
        'reading_1',
        'reading_2',
        'reading_3',
        'reading_4',
        'client_cut_off',
        'b_calib_date',
        'donor_sig',
        'date',
    ];

    public function donors()
    {
        $this->belongsTo(Donor::class);
    }
}
