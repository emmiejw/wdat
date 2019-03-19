<style>
body{
    margin:5px;
    padding:5px;
    border: solid black 1px;
}
p{
   font-size: 16px;
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
    <p class=""><b> Ref no.</b> <input type="text"> <b>Company Name</b> <input type="text"></p>    
    </div>
     <div class="col-5 text-center">
         <img src="images/logofinal.png" height="60px;" width="250px" style="margin:10px;">
    </div>
   </div>
   <div class="row" style="border: 2px solid grey; padding-top:1px;">
   <div class="col-8">
       <h5><b>1. Sample Donor Details</b></h5>
    <p><b> Name:</b><input type="text"><input type="text"> <br><br>
      <b>Job Title:</b> <input type="text"></p>    
    <p><b>DOB:</b> <input type="text"> <b>Gender:</b> <input type="checkbox"> Male  <input type="checkbox"> Female    </p> <b>Safety Critical (e.g. Construction):</b> <input type="checkbox"> Yes <input type="checkbox"> No
   </div>
     <div class="col-4">
        <h5><b>2. Reason for Testing</b></h5>
        <p>Random  <input type="checkbox"><br> 
           Periodic <input type="checkbox"><br>
           Investigation  <input type="checkbox"><br>
           Pre-employment  <input type="checkbox"> 
            <br>
        Other: <input type="text"></p>    
     </div>      
   </div> 
   <div class="row" style="border: 2px solid grey; padding-top:1px;">
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
            ID related number: <input type="text">
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
<div class="row" style="border: 2px solid grey; padding-top:1px;">
   <row class="col-12">
      <h5><b>Sample Donor</b></h5>
   </row>
   <row class="col-12">
      <p style="font-size:12;">I certify that I am willing to provide the samples required in order to complete this drug and alcohol test. I confirm that the information provided on this form is correct. I have declared any medication taken in the last 14 days. I CONSENT to my samples being analysed for the presence of drugs and/or alcohol and I understand that this may include further laboratory based analysis in order to confirm the result of any initial analysis undertaken. I give permission for the results of the tests, subsequent tests and reports (if applicable) to be given to or discussed with my employer, the person/organisation paying for this test or other person/organisation that is relevant to its purpose. I understand that this includes any results relating to medication (whether declared or undeclared at the time of this sample collection). I hold the individuals and testing companies involved within the testing procedure blameless against any loss or damage, direct or indirect, for either the results obtained or for any action arising or taken by any person in receipt of this information. I have read and accepted the information above and the 12 point Declaration form shown to me prior to samples being taken.</p>
   </row>
   <p style="margin-left:10px; "><b> Donor Signature</b> <input type="text"><input type="text"> <b>Date:</b> <input type="text"></p>  
</div>
<div class="row" style="border: 2px solid grey; padding-top:1px; padding-left:10px;">
   <div class="row">
      <div class="col-2"><h5><b>6. Alcohol Testing:</b></h5></div>
      <div class="col-8"><b>Please confirm that the sample donor has not eaten, drank (except water), smoked, chewed gum or used mouthwash in the last 15 minutes.</b></div>
      <div class="col-2">
            <i class="far fa-square" style="font-size:40px"> </i>  Please initial
      
         </div>
   </div>
   <div class="row"style="margin-top:1px;">
   
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
   </div>
   <div class="row"style="margin-top:1px;">
   
   <div class="col" >
         <h5><b>Breath Results:</b></h5>
         <p style="font-size:x-small">Result of screen shown approx BREATH ALCOHOL CONCENTRATION μg/100ml The <u>UK</u> driving limit is 80mg/100ml.  </p>
   </div>
   
      <row class="col-3">
         <p><b>Reading 1:</b> ............ μg/100ml</p>
      </row>
      <row class="col-3">
         <p><b> Reading 2:</b> ............ μg/100ml</p>
      </row>
      <row class="col-3">
         <p><b> Reading 3:</b> ............ μg/100ml</p>
      </row>
         <div class="row">
            <div class="col-9">
               <ul>
                  <li>1. Result of > 0μg/100ml a second reading is required 15 minute wait before taking the second reading</li>
                  <li>2. Third reading required if second reading is higher than the first. Wait 15 minutes before taking third reading</li>
                  <li>3. Last reading will be used to report results in all cases</li>
                  <li>I confirm the above results recorded are accurate and true</li>
               </ul>
            </div>
            <div class="col-3">
               <P class="text-center" style="border:2px solid grey;"><b>CLIENT CUT-OFF LEVEL</b><br>
               ............ μg/100ml</P>
            </div>
         </div>
         <p style="margin-left:15px;"><b> Donor Signature</b> <input type="text"><input type="text"> <b>Date:</b> <input type="text"></p>   
</div>         
   

</div>

<div class="row" style="border: 2px solid grey; padding-top:1px; padding-left:10px;">
   <div class="col-12" >
         <h5><b>7. Drug Testing: Details and Results</b>  Sample type: Urine</h5>
   </div>
   <div class="row">
      <div class="col-12">
            <div class="container">  
               <p style="font-size:small;">Sample temperature range (32-38 deg) <input type="checkbox"> YES  <input type="checkbox"> NO, sample invalid see SOP instructions</p>

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
                        <td>Amphetamines (AMP)</td>
                        <td><input type="checkbox"></td>
                        <td><input type="checkbox"></td>
                        <td style="width:250px;"></td>
                        <td><input type="checkbox"></td>
                        <td><input type="checkbox"></td>
                      </tr>
                      <tr>
                        <td>Benzodiazapines (BZO)</td>
                        <td><input type="checkbox"></td>
                        <td><input type="checkbox"></td>
                        <td style="width:250px;"></td>
                        <td><input type="checkbox"></td>
                        <td><input type="checkbox"></td>
                      </tr>
                      <tr>
                        <td>Cocaine (COC)</td>
                        <td><input type="checkbox"></td>
                        <td><input type="checkbox"></td>
                        <td style="width:250px;"></td>
                        <td><input type="checkbox"></td>
                        <td><input type="checkbox"></td>
                      </tr>
                      <tr>
                        <td>Cannabis (THC)</td>
                        <td><input type="checkbox"></td>
                        <td><input type="checkbox"></td>
                        <td style="width:250px;"></td>
                        <td><input type="checkbox"></td>
                        <td><input type="checkbox"></td>
                      </tr>
                      <tr>
                        <td>Methamphetamine's (MET)</td>
                        <td><input type="checkbox"></td>
                        <td><input type="checkbox"></td>
                        <td style="width:250px;"></td>
                        <td><input type="checkbox"></td>
                        <td><input type="checkbox"></td>
                      </tr>
                      <tr>
                        <td>Opiates (OPI)</td>
                        <td><input type="checkbox"></td>
                        <td><input type="checkbox"></td>
                        <td style="width:250px;"></td>
                        <td><input type="checkbox"></td>
                        <td><input type="checkbox"></td>
                       </tr>   
                    </tbody>
                  </table>
                </div>    
      </div>
     
           
      </div>
      </div>
      <div class="row" style="border: 2px solid grey; padding-top:10px; padding-left:10px;">
        <h5 style="padding-left:10px; padding-right:70px;"><b>8. Testings Incomplete</b></h5>     
         <p>No result for Alcohol testing <input type="checkbox" name="" id=""> Drug testing <input type="checkbox" ></p> 
         <div class="row">
            <div class="col-9">
                  <p>Specify a reason e.g. the donor was unwilling to provide sample/consent: </p>
            </div>
            <div class="col-3">
                  <input type="text">
            </div>
         </div>
      </div>  
      <div class="row" style="border: 2px solid grey; padding-top:10px; padding-left:10px;">
         <h5 style="padding-left:10px; padding-right:70px;"><b>9. Action Taken by Sample Collector</b></h5>   

         <p style="margin-right:10px;">No action required, all tests negative  </p>  <input type="checkbox">
         <p style="margin-right:10px; margin-left:10px;">Notify the requester of any non-negative results  </p> <input type="checkbox">
         <p style="margin-right:10px; margin-left:10px;">Laboratory tests ordered and urine samples declared and sealed for dispatch</p>   <input type="checkbox">      
         <p style="margin-right:10px; margin-left:20px;">Testers signature </p> <input type="text" style="margin-bottom:2px;">
         </div>
     
      </div>    
      </div>
            
</div>
 

               

</div> 
</div>