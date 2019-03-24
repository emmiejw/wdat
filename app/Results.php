<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Results extends Model
{
    protected $fillable = [
        'date',
        'time',
        'name',
        'company',
        'dob',
        'job',
        'urineResults',
        'breathResults',
        'consent',
        'image',
        'actionRequired',
        'notes',
    ];

    public function contacts(){
        return $this->belongsTo(Contacts::class);
    }
}
