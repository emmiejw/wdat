<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donor extends Model
{
    protected $table = 'donors';

    protected $fillable = [
        'ref',
        'company',
        'donor_name',
        'job_title',
        'dob',
        'gender',
        'medication1',
        'dose1',
        'medication2',
        'dose2',
        'medication3',
        'dose3',
        'medication4',
        'dose4',
        'medication5',
        'dose5',
        'reason',
        'id_available',
        'type_of_id',
        'id_number',
        'wit_name',
        'wit_sig',
        'relationship_donor',
        'wit_company',
        'sample_donor_sig',
        'test_date',
        'consumption',
        'reading_1',
        'reading_2',
        'reading_3',
        'reading_4',
        'client_cut_off',
        'b_calib_date',
        'alcohol_donor_sig',
        'date_test',
        'temp',
        'kit_no',
        'kit_exp_date',
        'met',
        'coc',
        'thc',
        'amp',
        'mop',
        'bzo',
        'mdma',
        'mtd',
        'tml',
        'ket',
        'no_action',
        'non_negatives',
        'lab_test_request',
        'additional_info',
        'testers_sig',
    ];

}
