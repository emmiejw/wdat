@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                        </ul>
                    </div>
                @endif
                @if(Session::has('created'))

                <div class="alert alert-success alert-dismissible session">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Success!</strong> Results Record has been added successfully!
                </div>
            @endif
                <div class="card">
                        <div class="card-header bg-success">
                                <h3 class="text-center">Add a new Results Record</h3>
                        </div>
                        <div class="card-body">
                                <a href="{{route('results.index')}}"><button  style="float:right;"type="button" class="btn btn-outline-danger">Back</button></a>
<br>
                                <form action="{{ action('ResultsController@store') }}" method="post" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <label>Date</label>
                                            <input class="form-control" type="date" name="date" placeholder=""/>
                                        </div>
                                        <div class="form-group">
                                            <label>Time</label>
                                            <input class="form-control" type="time" name="time" placeholder=""/>
                                        </div>
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input class="form-control" type="text" name="name" placeholder=""/>
                                        </div>
                                        <div class="form-group">
                                                <label>Employer</label>
                                                <input class="form-control" type="text" name="employer" placeholder=""/>
                                            </div>
                                        <div class="form-group">
                                            <label>DOB</label>
                                            <input class="form-control" type="date" name="dob" placeholder=""/>
                                        </div>
                                        <div class="form-group">
                                            <label>Job Role</label>
                                            <input class="form-control" type="text" name="job" placeholder=""/>
                                        </div>
                                        <div class="form-group">
                                            <label>Urine Test Results</label>
                                            <input class="form-control" type="text" name="urineResult" placeholder=""/>
                                        </div>
                                        <div class="form-group">
                                            <label>Breath Test Results </label>
                                            <input class="form-control" type="text" name="breathResult" placeholder=""/>
                                        </div>
                                        <div class="form-group">
                                            <label>Consent Given</label>
                                            <input class="form-control" type="text" name="consent" placeholder=""/>
                                        </div>
                                        <div class="form-group">
                                            <label>Results Form</label>
                                            <input class="form-control" type="file" name="image" placeholder=""/>
                                        </div>
                                        <div class="form-group">
                                            <label>Action Required</label>
                                            <input class="form-control" type="text" name="actionRequired" placeholder=""/>
                                        </div>
                                            <div class="form-group">
                                                <label>Notes</label>
                                                <textarea class="form-control" type="text" name="notes" placeholder=""></textarea>
                                            </div>
                                        <button class="btn btn-info" type="submit">Save</button>
                                    </form>
                        </div> 
                        <div class="card-footer">
                            @include('content.footer')
                        </div>
                      </div>
                
            </div>
        </div>
        </div>

        @stop