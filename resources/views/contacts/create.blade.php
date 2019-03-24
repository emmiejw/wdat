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
                    <strong>Success!</strong> Company Contact has been added successfully!
                </div>
            @endif
                <div class="card">
                        <div class="card-header bg-success">
                                <h3 class="text-center">Add a new Client Contact</h3>
                        </div>
                        <div class="card-body">
                                <a href="{{route('contacts.index')}}"><button  style="float:right;"type="button" class="btn btn-outline-danger">Back</button></a>
<br>
                                <form action="{{ action('ContactsController@store') }}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input class="form-control" type="text" name="name" placeholder=""/>
                                        </div>
                                        <div class="form-group">
                                            <label>Company</label>
                                            <input class="form-control" name="company" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label>Phone Number</label>
                                            <input class="form-control" type="text" name="phone" placeholder=""/>
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" type="text" name="email" placeholder=""/>
                                        </div>
                                        <div class="form-group">
                                            <label>Industry Type</label>
                                            <input class="form-control" type="text" name="industryType" placeholder=""/>
                                        </div>
                                        <div class="form-group">
                                            <label>Number of Employees </label>
                                            <input class="form-control" type="number" name="noEmployees" placeholder=""/>
                                        </div>
                                        <div class="form-group">
                                                <label>Frequency of Testing</label>
                                                <input class="form-control" type="text" name="frequencyOfTesting" placeholder=""/>
                                            </div>
                                        <button class="btn btn-primary" type="submit">Save</button>
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