<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contacts;
use Session;

class ContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $contacts = Contacts::paginate(25);

        return view('contacts.index', compact($contacts, 'contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'company' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'industryType' => 'required',
            'noEmployees' => 'required',
        ]);

        $contact = Contacts::create([
            'name' => $request ->name,
            'company' => $request ->company,
            'phone' => $request ->phone,
            'email' => $request ->email,
            'industryType' => $request ->industryType,
            'noEmployees' => $request ->noEmployees,
            'frequencyOfTests' => $request ->frequencyOfTests,
        ]);
        Session::flash('created', 'Company Contact has been added successfully.');
        
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
