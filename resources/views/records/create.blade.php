@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center font-weight-bold">Drug & Alcohol Test From</div>
                <div class="card-body">
                    <form action="{{route('record.store')}}" method="POST">
                            @csrf
                            @include('records.sections.sect1')
                            <hr>
                        <button type="submit" class="btn btn-primary mt-2">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection