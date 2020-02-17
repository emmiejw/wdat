<style>
   body {
      margin: 5px;
      padding: 5px;
      border: solid black 1px;
   }

   p {
      font-size: 15px;
   }

   input[type=text] {
      border: none;
      border-bottom: 2px solid grey;
   }

   th,
   td {
      font-size: small;
   }
</style>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
   integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
   integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<div class="container-fluid">
   <div class="row">
      <div class="col-7">
         <h2>Drug and Alcohol Testing Results Donor</h2>
      </div>
      <div class="col-2 text-center">
         <img src="/images/logofinal1.png" height="60px;" width="120px" style="margin-top:5px;">
      </div>
      <div class="col-1 text-center" style="margin-top:5px;">
         <p style="font-size: small;">working in conjunction with</p>
      </div>
      <div class="col-2">
         <img src="/images/tbt.jpg" height="40px;" width="90px" style="margin:5px;">
      </div>
   </div>
   <div class="row" text-center>
      <div class="col-4">
         <b> Ref no.</b> {{ $donor->ref }}
      </div>
      <div class="col-4">
         <b>Company Name</b> {{ $donor->company }}
      </div>
   </div>
   <div class="row" style="border-top: 1px solid grey; padding-top:5px;">
      <div class="col-4">
         <h5><b>1. Sample Donor Details</b></h5>
         <p><b> Name:</b> {{ $donor->name }}
            <p><b>Job Title:</b> {{ $donor->job_title }}</p>
         </p>

         <p><b>DOB:</b><br> {{ \Carbon\Carbon::parse($donor->dob)->format('d/m/Y') }}
            <p><b>Gender:</b> {{ $donor->gender }}
            </p>
      </div>
      <div class="col-6">
         <h5><b>1B. Sample Donor Medication</b></h5>
         <table class="table table-bordered ">
            <thead>
               <th>Medication</th>
               <th>Dosage</th>
               <th>Reason</th>
            </thead>
            <tbody>
               <tr>
                  <td> {{ $donor->medication1 }}</td>
                  <td> {{ $donor->dose1 }}</td>
                  <td></td>
               </tr>
               <tr>
                  <td> {{ $donor->medication2 }}</td>
                  <td> {{ $donor->dose2 }}</td>
                  <td></td>
               </tr>
               <tr>
                  <td> {{ $donor->medication3 }}</td>
                  <td> {{ $donor->dose3 }}</td>
                  <td></td>
               </tr>
               <tr>
                  <td> {{ $donor->medication4 }}</td>
                  <td> {{ $donor->dose4 }}</td>
                  <td></td>
               </tr>
               <tr>
                  <td> {{ $donor->medication5 }}</td>
                  <td> {{ $donor->dose5 }}</td>
                  <td></td>
               </tr>
            </tbody>
         </table>
      </div>
      <div class="col-2">
         <h5><b>2. Reason for Testing</b></h5>
         {{ $donor->reason }}
      </div>
   </div>
   <div class="row" style="border-top: 2px solid grey; padding-top:5px;">
      <h5><b>3. Proof of Identity</b></h5>
      <br>
   </div>
   <div class="row">
      <div class="col-6">
         <b>Photo ID provided: </b> {{ $donor->type_of_id }}
      </div>
      <div class="col-6">
         <b> ID related number:</b> {{ $donor->id_number }}

      </div>
   </div>
   <br>
   <div class="row">
      <div class="col-12">
         <p><b>Part 2: An authorised person e.g. Employer/Solicitor must sign below.</b> <span>I can confirm I am able
               to identify the sample donor and that the details entered above are accurate to the best of my
               knowledge</span></p>
      </div>
   </div>

   <div class="row" style="padding-bottom:5px; ">
      <div class="col-3">Print name: <input type="text"></div>
      <div class="col-3">Signature: <input type="text"></div>
      <div class="col-3">Relationship to Donor: <input type="text"></div>
      <div class="col-3">Employer: <input type="text"></div>
   </div>
</div>
<br>
<div class="row" style="border-top: 2px solid grey; padding-top:5px;">
   <row class="col-12">
      <h5><b>Sample Donor</b></h5>
   </row>
   <row class="col-12">
      <p style="font-size:12;">I hereby consent to a urine and breath test to detect or monitor the presence of drugs
         and their metabolites and the presence of alcohol in samples of my breath. I accept that the test does not
         constitute a violation of my human rights. In the event of a non-negative result (drugs) and or positive
         result (alcohol), I understand the policy of {{ $donor->policy }}. I accept the
         interpretation of my test results by the assessor. I give consent for the employer/ agency/ person paying
         for the tests to have access to the results and accept that donors of the results will be kept. I
         understand this includes any result relating to medication, whether declared or undeclared at the time of
         sample collection. I understand that a chain of custody maybe performed in light of a non-negative drugs
         screen and give consent for my sample to be laboratory tested to confirm the results of any initial analysis
         undertaken. I hold the individuals and testing companies involved within this procedure blameless against
         any loss or damage, direct or indirect, for either the results obtained or for any action arising or taken
         by any person in receipt of this information. </p>
   </row>
   <p style="margin-left:10px; "><b> Donor Signature</b> <input type="text"><input type="text"> <b>Date:</b> <input
         type="text"></p>
</div>

<div class="row" style="border-top: 2px solid grey; padding-top:5px; padding-left:10px;">
   <div class="row">
      <div class="col-2">
         <h5><b>6. Alcohol Testing:</b></h5>
      </div>
      <div class="col-8"><b>Please confirm that the sample donor has not eaten, drank (except water), smoked, chewed
            gum or used mouthwash in the last 15 minutes.</b> </div>
      <div class="col-2">
         <i class="far fa-square" style="font-size:40px"> </i> Please initial

      </div>
   </div>
   <div class="row" style="margin-top:1px;">

      <div class="col">
         <h5><b>Breath Results:</b></h5>
         <p style="font-size:x-small">Result of screen shown approx BREATH ALCOHOL CONCENTRATION μg/100ml The
            <u>UK</u> driving limit is 35μg/100ml. </p>
      </div>

      <row class="col-2">
         <p><b>Reading 1:</b> <br>{{ $donor->reading_1 }} μg/100ml</p>
      </row>
      <row class="col-2">
         <p><b> Reading 2:</b> <br>{{ $donor->reading_2 }} μg/100ml</p>
      </row>
      <row class="col-2">
         <p><b> Reading 3:</b><br>{{ $donor->reading_3 }} μg/100ml</p>
      </row>
      <row class="col-2">
         <p><b> Reading 4:</b> <br>{{ $donor->reading_4}} μg/100ml</p>
      </row>
      <div class="row">
         <div class="col-7">
            <ul>
               <li>1. Result of > 0μg/100ml a second reading is required 15 minute wait before taking the second
                  reading</li>
               <li>2. Further reading required if second reading is higher than the first. Wait 15 minutes before
                  taking further reading</li>
               <li>3. Last reading will be used to report results in all cases</li>
               <li>I confirm the above results Donored are accurate and true</li>
            </ul>
         </div>
         <div class="col-2">
            <p class="text-center "><b>CLIENT CUT-OFF LEVEL</b><br>
               {{ $donor->client_cut_off }}  μg/100ml <br><br>
            </p>
         </div>
         <div class="col-3">
            <p style="font-size:small" class="text-center">
               Breathalyzer Calibration Date: <br>{{ $donor->b_calib_date }} </p>

            </p>
         </div>
      </div>
      <p style="margin-left:15px;"><b> Donor Signature</b> <input type="text"><input type="text"> <b>Date:</b> <input
            type="text">
   </div>
</div>
<div class="row" style="border-top: 2px solid grey; padding-top:5px; padding-left:10px;">
   <div class="col-12">
      <h5><b>7. Drug Testing: Details and Results</b> Sample type: Urine</h5>
   </div>
   <div class="row">
      <div class="col-12">
         <div class="container">
            <div class="row">
               <div class="col-4">
                  <p style="font-size:small;">Sample temperature range (32-38 deg)
                     @if ($donor->temp == 1)
                     YES
                     @else
                     NO
                     @endif
               </div>
               <div class="col-4 text-sm">
                  Drug kit Lot no. {{ $donor->kit_no }}
                  </p>
               </div>
               <div class="col4">
                  Drug kit Expiry Date: {{ $donor->kit_exp_date }}
               </div>
            </div>

            <p style="font-size:small;">Valid results require the presence of all control lines, where magenta test
               lines do not form, the sample donor is considered non-negative for that particular drug. A formed line
               is a negative regardless of how feint the line is.
            </p>
            <table class="table table-bordered table-sm">
               <thead>
                  <tr>
                     <th>Drug Tested</th>
                     <th>Results</th>
                     <th>Drug Tested</th>
                     <th>Results</th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <td>Methamphetamine (MET)</td>
                     <td>
                        @if ($donor->met == 0)
                        Negative
                        @else
                        <b>Non-negative</b>
                        @endif
                     </td>
                     <td>Ecstasy (MDMA)</td>
                     <td>
                        @if ($donor->mdma == 0)
                        Negative
                        @else
                        <b>Non-negative</b>
                        @endif
                     </td>
                  </tr>
                  <tr>
                     <td>Cocaine (COC)</td>
                     <td>
                        @if ($donor->coc == 0)
                        Negative
                        @else
                        <b>Non-negative</b>
                        @endif
                     </td>
                     <td>Methadone (MTD) </td>
                     <td>
                        @if ($donor->mtd == 0)
                        Negative
                        @else
                        <b>Non-negative</b>
                        @endif
                     </td>
                  </tr>
                  <tr>
                     <td>Cannabis (THC) </td>
                     <td>
                        @if ($donor->thc == 0)
                        Negative
                        @else
                        <b>Non-negative</b>
                        @endif
                     </td>
                     <td>Tramadol (TML)</td>
                     <td>
                        @if ($donor->tml == 0)
                        Negative
                        @else
                        <b>Non-negative</b>
                        @endif
                     </td>
                  </tr>
                  <tr>
                     <td>Amphetamines (AMP) </td>
                     <td>
                        @if ($donor->amp == 0)
                        Negative
                        @else
                        <b>Non-negative</b>
                        @endif
                     </td>
                     <td>Ketamine (KET)</td>
                     <td>
                        @if ($donor->ket == 0)
                        Negative
                        @else
                        <b>Non-negative</b>
                        @endif
                     </td>
                  </tr>
                  <tr>
                     <td>Morphine (MOP)</td>
                     <td>
                        @if ($donor->mop == 0)
                        Negative
                        @else
                        <b>Non-negative</b>
                        @endif
                     </td>
                  </tr>
                  <tr>
                     <td>Benzodiazepines (BZO) </td>
                     <td>
                        @if ($donor->bzo == 0)
                        Negative
                        @else
                        <b>Non-negative</b>
                        @endif
                     </td>
                  </tr>
               </tbody>
            </table>
            <p style="margin-left:15px;"><b> Donor Signature</b> <input type="text"><input type="text"> <b>Date:</b>
               <input type="text">

         </div>
      </div>
   </div>
</div>
<div class="row" style="border-top: 2px solid grey; padding-top:5px; padding-left:10px;">
   <div class="col-4">
      <h5 style="padding-left:10px; padding-right:70px;"><b>8. Action Taken by Sample Collector</b></h5>
   </div>

   <table>
      <tr>
         <td style="padding:10px;">No action required, all tests negative </td>
         <td style="padding:10px;"><input type="checkbox"> </td>
         <td style="padding:10px;">Notify the requester of any non-negative </td>
         <td style="padding:10px;"> <input type="checkbox" style="margin:1px;"> Alcohol <input type="checkbox"
               style="margin:1px;"> Drugs</td </tr> </table> <div class="row">
         <div class="px-4"> Testers signature </div>
         <input type="text" style="width:250px;">
</div>




{{-- </div>
</div>

</div>
</div>

</div>




</div> --}}
</div>