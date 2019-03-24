@extends('layouts.app')

@section('content')
<div class="container">
  
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary" style="color:white;"><h3 class="text-center">Client Contacts</h3></div>

                <div class="card-body">
                   <div class="row justify-content-center">
                   <a href="{{route('contacts.create')}}"><button type="button" class="btn btn-outline-info">Add a New Client Contact</button></a>
                      
                   </div>
                   <br>
                   <div class="container">
                      <p>Select a Company to add a new employees test results</p>
                                
                      <table class="table table-striped table-responsive">
                          <thead>
                            <tr>
                              <th>Date</th>
                              <th>Time</th>
                              <th>Name</th>
                              <th>Company</th>
                              <th>DOB</th>
                              <th>Job Title</th>
                              <th>Urine Test Result</th>
                              <th>Breath Test Result</th>
                              <th>Consent Given</th>
                              <th>Completed Testing Form</th>
                              <th>Action Required</th>
                              <th>Notes</th>
                            </tr>
                          </thead>
                          <tbody>
                              @foreach ($results as $result)
                                    <tr>
                                            <td>{{$result->date}}</td>
                                            <td>{{$result->time}}</td>
                                            <td>{{$result->name}}</td>
                                            <td>{{$result->company}}</td>
                                            <td>{{$result->dob}}</td>
                                            <td>{{$result->job}}</td>
                                            <td>{{$result->urineResult}}</td>
                                            <td>{{$result->breathResult}}</td>
                                            <td>{{$result->consent}}</td>
                                            <td>{{$result->formUpload}}</td>
                                            <td>{{$result->actionRequired}}</td>
                                            <td>{{$result->notes}}</td>
                                    </tr>
                            @endforeach
                          </tbody>
                          </table>
                    </div>
                    <hr>

                 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
