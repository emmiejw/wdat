@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center font-weight-bold">WDAT Dashboard</div>
                <div class="card-body">
                    {{-- <h3>Welcome {{ Auth::user()->name }},</h3> --}}
                    <div class="row">
                        <div class="col-6 text-center">
                            <a href="{{ route('record.create') }}">
                                <button class="btn btn-primary">
                                    Add New Donor Record
                                </button>
                            </a>
                        </div>
                        <div class="col-6 text-center">
                            <a href="{{route('record.index')}}">
                                <button class="btn btn-info">
                                    View All Records
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-header text-center font-weight-bold">WDAT Declaration</div>
                <div class="card-body">
                    <ol>
                        <li>The Testing Company is Workplace Drug & Alcohol Testing Ltd.</li>
                        <li>I verify that the information contained in the Drug and Alcohol Testing Results Donor is correct and true to the best of my knowledge.
                        </li>
                        <li>All personal information provided will be used to uniquely identify you as a test
                            participant and provide the necessary information for analysing your biological sample in
                            the laboratory.
                        </li>
                        <li>I authorise Workplace Drug & Alcohol Testing Ltd and laboratory to perform drug testing with
                            my biological specimen or that of the minor or who is otherwise legally incapable of
                            consenting, named on this form. My personal information will not be shared with any other
                            third-party unless authorised in writing or ordered by my employer. To request a third-party
                            consent form, please email us on workplacedat@gmail.com. You will be required to answer
                            security questions to access this service.
                        </li>
                        <li>I understand that the biological specimens and associated personal information will be
                            stored in the compliance with the Workplace Drug & Alcohol Testing Ltd Archive Policy. To
                            request a copy of your personal information please email us on workplacedat@gmail.com. You
                            will be required to answer security questions to access this service.
                        </li>
                        <li>I have the right to request erasure of my personal information. This will be subject to
                            restrictions according to Workplace Drug & Alcohol Testing Ltd Archive Policy and retention
                            periods required for the type of test I have chosen. More detailed information regarding
                            your rights under the General Data Protection Act can be found at www.gov.uk
                        </li>
                        <li>If the test involves a person who is a minor (under the age of 16 years old) or who is
                            legally incapable of consenting, I attest that I have the legal authority to consent to
                            testing and assume all legal/parental responsibility. For the latest guidance on parental
                            responsibility and applicable law, please visit www.gov.uk/parental-rights-responsibilities.
                        </li>
                        <li>I acknowledge and agree that the laboratory's liability to me arising out of or in anyway
                            related to the provision of testing services contemplated herein shall not exceed the cost
                            of the test and I agree to indemnify, defend and hold Workplace Drug & Alcohol Testing Ltd,
                            its officers, agents, employees, representatives and any person or entities collecting
                            specimens harmless from all further claims and or damages.
                        </li>
                        <li>I acknowledge and understand that if for any reason the biological specimen is inadequate
                            for evaluation, Workplace Drug & Alcohol Testing Ltd or the entities collecting specimens,
                            shall not be held liable if it is unable to produce test results due to insufficient
                            specimen or due to the nature or condition of the specimen. Workplace Drug & Alcohol Testing
                            Ltd may request additional samples, which will incur additional costs. 
                        </li>
                        <li>I understand that to ensure testing of the highest quality, Workplace Drug & Alcohol Testing
                            Ltd reserves the right to perform more testing to satisfy strict laboratory standards and
                            guidelines. If this process delays the reporting of results, I will not hold Workplace Drug
                            & Alcohol Testing Ltd or the entities collecting specimens liable for any refund or damages.
                        </li>
                        <li>I accept that all email results will be sent via secure email and password protected.
                        </li>
                        <li>I understand that I have the right to withdraw consent for my participation in this drug
                            test at any time. My samples and associated personal information will be destroyed. To
                            withdraw your consent after your samples have been collected, please email us at
                            workplacedat@gmail.com. You will be required to provide proof of identity (Passport/Driving
                            licence) and answer security questions to access this service. Cancellation and processing
                            fees will apply in the case of withdrawn consent.
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection