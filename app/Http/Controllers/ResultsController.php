<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contacts;
use App\Results;
use Session;

class ResultsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $results = Results::get();
        return view('results.index', compact($results, 'results'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('results.create');
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
            'date' => 'required',
            'time' => 'required',
            'name' => 'required',
            'employer' => 'required',
            'dob' => 'required',
            'job' => 'required',
            'urineResult' => 'required',
            'breathResult' => 'required',
            'consent' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5120',
            
        ]);

        $image = $request->image;
        $image_new_name = time().$image->getClientOriginalExtension();
        $image->move('forms/', $image_new_name);

            $results = new Results();
            $results->date = $request['date'];
            $results->time = $request['time'];
            $results->name = $request['name'];
            $results->employer = $request['employer'];
            $results->dob = $request['dob'];
            $results->job = $request['job'];
            $results->urineResult = $request['urineResult'];
            $results->breathResult = $request['breathResult'];
            $results->consent = $request['consent'];
            $results->image= $request['forms/' . '$image_new_name'];
            $results->actionRequired = $request['actionRequired'];
            $results->notes = $request['notes'];
            $results->save();
            
        
        
        Session::flash('created', 'Results created succesfully.');
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
