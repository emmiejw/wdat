<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donor extends Model
{
    protected $fillable = ('');

    public function companies()
    {
        $this->belongsTo(Company::class);
    }

    public function alcohol_tests()
    {
        $this->hasMany(AlcoholTest::class);
    }

    public function drug_tests()
    {
        $this->hasMany(DrugTest::class);
    }

    public function any_actions()
    {
        $this->hasMany(AnyAction::class);
    }
    
    public function consents()
    {
        $this->hasMany(Consent::class);
    }

    public function medications()
    {
        $this->hasMany(Medication::class);
    }
    
    public function proof_of_ids()
    {
        $this->hasMany(ProofOfId::class);
    }

    public function reason_for_tests()
    {
        $this->hasMany(ReasonForTest::class);
    }
}
