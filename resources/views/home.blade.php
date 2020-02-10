@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">WDAT Dashboard</div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-6 text-center">
                            <a href="{{route('company.create')}}">
                                <button class="btn btn-primary">
                                    Add Company
                                </button>
                            </a>
                        </div>
                        <div class="col-6 text-center">
                            <a href="{{route('company.index')}}">
                                <button class="btn btn-info">
                                    View All Company
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection