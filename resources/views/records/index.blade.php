@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Add a New Company</div>

                <div class="card-body">
                   <div class="row font-weight-bold ml-1">
                       <div class="col-4">Name</div>
                       <div class="col-3">Date of Tests</div>
                       <div class="col-3"></div>
                   </div>
                   <br>
                    @foreach ($donors as $donor)
                    <div class="row mb-1">
                        <div class=" col-4">
                                {{$donor->name}}
                        </div>
                       <div class="col-3">
                            {{ \Carbon\Carbon::parse($donor->alcohol_test)->format('d/m/Y') }}
                       </div>
                       <div class="col-3">
                            <a href="{{route('record.show', $donor->id) }}" class="btn btn-primary btn-sm">View Record</a>
                       </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
