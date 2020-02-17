<?php

namespace App\Http\Controllers;

use App\Donor;
use Illuminate\Http\Request;

class RecordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Donor $donors)
    {
        $donors = Donor::all();
        return view('records.index', compact('donors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('records.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     $record =  new Donor([
         'ref' => $request->get('ref'),
       'company' => $request->get('company'),
       'name' => $request->get('name'),
       'job_title' => $request->get('job_title'),
       'dob' => $request->get('dob'),

       'gender' => $request->get('gender'),
       'medication1' => $request->get('medication1'),
       'dose1' => $request->get('dose_1'),
       'medication2' => $request->get('medication2'),
       'dose2' => $request->get('dose2'),
       'medication3' => $request->get('medication3'),
       'dose3' => $request->get('dose3'),
       'medication4' => $request->get('medication4'),
       'dose4' => $request->get('dose4'),
       'medication5' => $request->get('medication5'),
       'dose5' => $request->get('dose5'),
       'reason' => $request->get('reason'),
       'id_available' => $request->get('id_available'),
       'type_of_id' => $request->get('type_of_id'),
       'id_number' => $request->get('id_number'),
       'wit_name' => $request->get('wit_name'),
    //    'wit_sig' => $request->get('wit_sig'),
       'relationship_donor' => $request->get('relationship_donor'),
       'wit_company' => $request->get('wit_company'),
    //    'sample_donor_sig' => $request->get('sample_donor_sig'),
    'policy' => $request->get('policy'),

       'test_date' => $request->get('test_date'),
       'consumption' => $request->get('consumption'),
       'reading_1' => $request->get('reading_1'),
       'reading_2' => $request->get('reading_2'),
       'reading_3' => $request->get('reading_3'),
       'reading_4' => $request->get('reading_4'),
       'client_cut_off' => $request->get('client_cut_off'),
       'b_calib_date' => $request->get('b_calib_date'),
    //    'alcohol_donor_sig' => $request->get('alcohol_donor_sig'),
       'alcohol_test' => $request->get('alcohol_test'),
       'temp' => $request->get('temp'),
       'kit_no' => $request->get('kit_no'),
       'kit_exp_date' => $request->get('kit_exp_date'),
       'met' => $request->get('met'),
       'coc' => $request->get('coc'),
       'thc' => $request->get('thc'),
       'amp' => $request->get('amp'),
       'mop' => $request->get('mop'),
       'bzo' => $request->get('bzo'),
       'mdma' => $request->get('mdma'),
       'mtd' => $request->get('mtd'),
       'tml' => $request->get('tml'),
       'ket' => $request->get('ket'),
       'no_action' => $request->get('no_action'),
       'non_negatives' => $request->get('non-negatives'),
       'lab_test_request' => $request->get('lab_test_request'),
       'additional_info' => $request->get('additional_info'),
    //    'testers_sig' => $request->get('testers_sig'),

         ] );

         $record->save();


      return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $donor = Donor::findOrFail($id);
        
        return view('record',compact('donor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
