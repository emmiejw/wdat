@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <h4 class="card-header text-center font-weight-bold">Drug & Alcohol Test Form</h4>
                <div class="card-body">
                    <form action="{{route('record.store')}}" method="POST">
                        @csrf
                        @include('records.sections.sect1')
                        <hr>
                        @include('records.sections.sect2')
                        <hr>
                        @include('records.sections.sample')
                        <hr>
                        @include('records.sections.alcohol')
                        <hr>
                        @include('records.sections.drugs')
                        <hr>
                        @include('records.sections.action')
                        <button type="submit" class="btn btn-primary mt-2">Save Tests</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection