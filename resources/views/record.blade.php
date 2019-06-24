<style>
body{
    margin:5px;
    padding:5px;
    border: solid black 1px;
}
p{
   font-size: 15px;
}                                                          

input[type=text] {
  border: none;
  border-bottom: 2px solid grey;
}
 th, td{
   font-size: small;
}
</style>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<div class="container-fluid">
   <div class="row">
     <div class="col-7">
         <h2>Drug and Alcohol Testing Results Record</h2>
    <p class=""><b> Ref no.</b> <input type="text" style="font-size:xx-large;"> <br> <br><b>Company Name</b> <input type="text"><input type="text"></p>    
    </div>
     <div class="col-2 text-center">
         <img src="images/logofinal2.png" height="60px;" width="100px" style="margin:15px;">
      </div>
      <div class="col-1 text-center" style="margin-top:15px;">
         <p style="font-size: small;">working in conjunction with</p> 
      </div>
      <div class="col-2">
         <img src="images/tbt.jpg" height="60px;" width="90px" style="margin:15px;">
      </div>

  <br>
   </div>
   <div class="row" style="border-top: 2px solid grey; padding-top:20px;">
   <div class="col-6">
       <h5><b>1. Sample Donor Details</b></h5>
    <p><b> Name:</b><input type="text"><input type="text"><input type="text"> <br><br>
      <b>Job Title:</b> <input type="text"></p>    
    <p><b>DOB:</b> <input type="text"> <br>
      <p><b >Gender:</b> <input type="checkbox"> Male  <input type="checkbox"> Female    </p></p> 
   </div>
   <div class="col-4">
      <h5><b>1B. Sample Donor Medication</b></h5>
         <table class="table table-bordered ">
            <thead>
               <th>Medication</th>
               <th>Dosage</th>
               <th>Reason</th>
            </thead>
            <tbody>
               <tr>
                     <td></td>
                     <td></td>
                     <td></td>
               </tr>
               <tr>
                     <td></td>
                     <td></td>
                     <td></td>
               </tr>
               <tr>
                     <td></td>
                     <td></td>
                     <td></td>
               </tr>
               <tr>
                     <td></td>
                     <td></td>
                     <td></td>
               </tr>
               <tr>
                     <td></td>
                     <td></td>
                     <td></td>
               </tr>
            </tbody>
         </table>
         <p style="font-size:small;">Please cont. on reverse side if needed</p>
  </div>
     <div class="col-2">
        <h5><b>2. Reason for Testing</b></h5>
        <p>Random  <input type="checkbox"><br> 
           Periodic <input type="checkbox"><br>
           Investigation  <input type="checkbox"><br>
           Pre-employment  <input type="checkbox"> 
            <br>
        Other: <input type="text"></p>    
     </div>      
   </div> 
   <div class="row" style="border-top: 2px solid grey; padding-top:20px;">
      <row class="col-3">
         <h5><b>3. Proof of Identity</b></h5>
      </row>
      <row class="col-3">
            <p>Photographic ID available for inspection:</p>
      </row>
      <row class="col-3">
            <input type="checkbox"> <b>YES </b> - please complete <b>part 1</b> 
      </row>
      <row class="col-3">
            <input type="checkbox"> <b>NO </b> - please complete <b>part 2</b>
     </row>
      <div class="col-6">
            <p><b>PART 1: </b>  Photo ID provided: <input type="text">    
      </div>
      <div class="col-6">
            ID related number: <input type="text"><input type="text">
      </div>
      <div class="col-12">
            <p><b>Part 2:  An authorised person e.g. Employer/Solicitor must sign below.</b> <span>I can confirm I am able to identify the sample donor and that the details entered above are accurate to the best of my knowledge</span></p>
      </div>
      <div class="row" style="padding-bottom:5px; ">
         <div class="col-3" style="padding-left:50px;">Print name: <br><input type="text"></div>
         <div class="col-3" style="padding-left:50px;">Signature: <br><input type="text"></div>
         <div class="col-3" style="padding-left:50px;">Relationship to Donor: <br><input type="text"></div>
         <div class="col-3" style="padding-left:50px;">Employer: <br><input type="text"></div>
      </div>  
   </div>
   <br>
<div class="row" style="border-top: 2px solid grey; padding-top:20px;">
   <row class="col-12">
      <h5><b>Sample Donor</b></h5>
   </row>
   <row class="col-12">
      <p style="font-size:12;">I hereby consent to a urine and breath test to detect or monitor the presence of drugs and their metabolites and the presence of alcohol in samples of my breath. I accept that the test does not constitute a violation of my human rights. In the event of a non-negative result (drugs) and or positive result (alcohol), I understand the policy of <input type="text"><input type="text">. I accept the interpretation of my test results by the assessor. I give consent for the employer/ agency/ person paying for the tests to have access to the results and accept that records of the results will be kept. I understand this includes any result relating to medication, whether declared or undeclared at the time of sample collection. I understand that a chain of custody maybe performed in light of a non-negative drugs screen and give consent for my sample to be laboratory tested to confirm the results of any initial analysis undertaken. I hold the individuals and testing companies involved within this procedure blameless against any loss or damage, direct or indirect, for either the results obtained or for any action arising or taken by any person in receipt of this information. </p>
   </row>
   <p style="margin-left:10px; "><b> Donor Signature</b> <input type="text"><input type="text"> <b>Date:</b> <input type="text"></p>  
</div>
<br>
<div class="row" style="border-top: 2px solid grey; padding-top:20px; padding-left:10px;">
   <div class="row">
      <div class="col-2"><h5><b>6. Alcohol Testing:</b></h5></div>
      <div class="col-8"><b>Please confirm that the sample donor has not eaten, drank (except water), smoked, chewed gum or used mouthwash in the last 15 minutes.</b> </div>
      <div class="col-2">
            <i class="far fa-square" style="font-size:40px"> </i>  Please initial
      
         </div>
   </div>
   <br>
   {{-- <div class="row"style="margin-top:1px;">
   
      <div class="col" >
            <h5><b>Saliva Results:</b></h5>
            <p>(please tick to indicate)</p>
      </div>
            <row class="col-2" style="margin-left:60px;">
                  <input type="checkbox" style="margin:1px;"> 0.0mg/100ml
            </row>
            <row class="col-2">
                  <input type="checkbox" style="margin:1px;"> 20mg/100ml
           </row>
           <row class="col-2">
               <input type="checkbox" style="margin:1px;"> 80mg/100ml
         </row>
         <row class="col-2">
               <input type="checkbox" style="margin:1px;"> 300mg/100ml
        </row>
   </div> --}}
   <div class="row"style="margin-top:1px;">
   
   <div class="col" >
         <h5><b>Breath Results:</b></h5>
         <p style="font-size:x-small">Result of screen shown approx BREATH ALCOHOL CONCENTRATION μg/100ml The <u>UK</u> driving limit is 35μg/100ml.  </p>
   </div>
   
      <row class="col-2">
         <p><b>Reading 1:</b> ............ μg/100ml</p>
      </row>
      <row class="col-2">
         <p><b> Reading 2:</b> ............ μg/100ml</p>
      </row>
      <row class="col-2">
         <p><b> Reading 3:</b> ............ μg/100ml</p>
      </row>
      <row class="col-2">
         <p><b> Reading 4:</b> ............ μg/100ml</p>
      </row>
         <div class="row">
            <div class="col-9">
               <ul>
                  <li>1. Result of > 0μg/100ml a second reading is required 15 minute wait before taking the second reading</li>
                  <li>2. Further reading required if second reading is higher than the first. Wait 15 minutes before taking further reading</li>
                  <li>3. Last reading will be used to report results in all cases</li>
                  <li>I confirm the above results recorded are accurate and true</li>
               </ul>
            </div>
            <div class="col-3">
               <p class="text-center "><b>CLIENT CUT-OFF LEVEL</b><br>
               ............ μg/100ml <br><br>
               <p style="font-size:x-small" class="text-center">
                     Breathalyzer Calibration Date:<input type="text"> <br></p>   

               </p>
               </p>
               
            </div>
         </div>
         <p style="margin-left:15px;"><b> Donor Signature</b> <input type="text"><input type="text"> <b>Date:</b> <input type="text"> 
</div>         
</div>
<br>
<div class="row" style="border-top: 2px solid grey; padding-top:20px; padding-left:10px;">
   <div class="col-12" >
         <h5><b>7. Drug Testing: Details and Results</b>  Sample type: Urine</h5>
   </div>
   <div class="row">
      <div class="col-12">
            <div class="container">  
               <div class="row">
                  <div class="col-4">
                        <p style="font-size:small;">Sample temperature range (32-38 deg) <input type="checkbox" style="margin-left:15px; margin-right:15px;">    YES  
                  </div>
                  <div class="col-8" style="font-size:x-small" >
                        Drug kit Lot no. <input type="text"><input type="text"><input type="text"> Drug kit Expiry Date: <input type="text"></p>
                  </div>
               </div>
                      
               <p style="font-size:small;">Valid results require the presence of all control lines, where magenta test lines do not form, the sample donor is considered non-negative for that particular drug. A formed line is a negative regardless of how feint the line is.
               </p>
                  <table class="table table-bordered table-sm">
                    <thead>
                      <tr>
                           <th>Drug Tested</th>
                           <th>Negative</th>
                           <th>Non-negative</th>
                           <th>Drug Tested</th>
                           <th>Negative</th>
                           <th>Non-negative</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Methamphetamine (MET)</td>
                        <td><input type="checkbox"></td>
                        <td><input type="checkbox"></td>
                        <td >Ecstasy (MDMA)</td>
                        <td><input type="checkbox"></td>
                        <td><input type="checkbox"></td>
                      </tr>
                      <tr>
                        <td>Cocaine (COC)</td>
                        <td><input type="checkbox"></td>
                        <td><input type="checkbox"></td>
                        <td >Methadone (MTD) </td>
                        <td><input type="checkbox"></td>
                        <td><input type="checkbox"></td>
                      </tr>
                      <tr>
                        <td>Cannabis (THC) </td>
                        <td><input type="checkbox"></td>
                        <td><input type="checkbox"></td>
                        <td >Tramadol (TML)</td>
                        <td><input type="checkbox"></td>
                        <td><input type="checkbox"></td>
                      </tr>
                      <tr>
                        <td>Amphetamines (AMP) </td>
                        <td><input type="checkbox"></td>
                        <td><input type="checkbox"></td>
                        <td >Ketamine (KET)</td>
                        <td><input type="checkbox"></td>
                        <td><input type="checkbox"></td>
                      </tr>
                      <tr>
                        <td>Morphine (MOP)</td>
                        <td><input type="checkbox"></td>
                        <td><input type="checkbox"></td>
                        <td style="width:250px;"></td>
                        <td><input type="checkbox"></td>
                        <td><input type="checkbox"></td>
                      </tr>
                      <tr>
                        <td>Benzodiazepines (BZO) </td>
                        <td><input type="checkbox"></td>
                        <td><input type="checkbox"></td>
                        <td style="width:250px;"></td>
                        <td><input type="checkbox"></td>
                        <td><input type="checkbox"></td>
                       </tr>   
                    </tbody>
                  </table>
         <p style="margin-left:15px;"><b> Donor Signature</b> <input type="text"><input type="text"> <b>Date:</b> <input type="text"> 

                </div>    
      </div>
      </div>
      </div>
      <div class="row" style="border-top: 2px solid grey; padding-top:15px; padding-left:10px;">
         <h5 style="padding-left:10px; padding-right:70px;"><b>8. Action Taken by Sample Collector</b></h5>   

         <p style="margin-right:10px;">No action required, all tests negative  </p>  <input type="checkbox"> 
         <br><br>
         <p style="margin-right:10px; margin-left:20px;">Notify the requester of any non-negative <input type="checkbox" style="margin:1px;"> Alcohol   <input type="checkbox" style="margin:1px;"> Drugs</p>
         <p style="margin-right:10px; margin-left:10px;">Laboratory tests ordered and urine samples declared and sealed for dispatch</p>   <input type="checkbox">      
         <p style="margin-right:10px; margin-left:20px;">Additional Information</p> <input type="text" style="margin-bottom:10px;"><input type="text" style="margin-bottom:10px;"> <br>
         
         <br>
         <div class="row" >
               <p style="margin-right:10px; margin-left:10px;"> Testers signature </p> <input type="text" ><input type="text">
         </div>
         </div>
     
      </div>    
      </div>
            
</div>
 

               

</div> 
</div>