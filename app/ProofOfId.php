<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProofOfId extends Model
{
    protected $fillable = [
        'donor_id',
        'id_available',
        'type_of_id',
        'id_number',
        'wit_name',
        'wit_sig',
        'relationship_donor',
        'wit_company',
        'wit_name',
    ];

    public function donors()
    {
        $this->belongsTo(Donor::class);
    }
}
