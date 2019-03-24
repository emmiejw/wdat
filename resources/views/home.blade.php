@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Client Contacts</div>

                <div class="card-body">
                    <div class="row justify-content-center">
                      <a href="{{route('contacts.index')}}"><button type="button" class="btn btn-outline-info">View all Client Contacts</button></a>
                    </div>
                        <br>
                    <div class="row justify-content-center">
                      <a href="{{route('results.index')}}"><button type="button" class="btn btn-outline-primary">View all Results Record</button></a>
                    </div>
                     <br>
                   <div class="row justify-content-center">
                   <a href="{{route('contacts.create')}}"><button type="button" class="btn btn-outline-success">Add a New Client Contact</button></a>
                   </div>
                   <br>
                   <div class="row justify-content-center">
                   <a href="{{route('results.create')}}"><button type="button" class="btn btn-outline-danger">Add a New Results Record</button></a>
                   </div>
                   <br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
