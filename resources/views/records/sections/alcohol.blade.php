<h5 class="font-weight-bold">Alcohol Testing:</h5>
<div class="row form-group">
    <div class="col-8">
        <p>
            Please confirm that the sample donor has not eaten, drank (except water), smoked, chewed gum or used
            mouthwash in the last 15 minutes.
        </p>
    </div>
    <div class="col-4">
        <input type="text" name="consumption" id="" class="form-control" style="width:75px;height:75px;">
    </div>
</div>
<h5>Breath Results:</h5>
<small>
    Result of screen shown approx BREATH ALCOHOL CONCENTRATION μg/100ml The UK driving limit is 35μg/100ml.
</small>
<br>
<table class="table table-borderless">
    <tr>
        <td>Reading 1:</td>
        <td><input type="number" name="reading_1" class="form-control" id="" style="width:75px;"></td>
        <td><small>μg/100ml</small> </td>
        <td>Reading 2:</td>
        <td><input type="number" name="reading_2" class="form-control" id="" style="width:75px;"></td>
        <td><small>μg/100ml</small> </td>
    </tr>
    <tr>
        <td>Reading 3:</td>
        <td><input type="number" name="reading_3" class="form-control" id=" " style="width:75px;"></td>
        <td><small>μg/100ml</small> </td>
        <td>Reading 4:</td>
        <td><input type="number" name="reading_4" class="form-control" id="" style="width:75px;"></td>
        <td><small>μg/100ml</small> </td>
    </tr>
</table>
<ol class="list-group">
    <li class="list-group-item list-group-item-secondary">1. Result of > 0μg/100ml a second reading is required 15
        minute wait before taking the second
        reading</li>
    <li class="list-group-item">2. Further reading required if second reading is higher than the first. Wait 15
        minutes before
        taking further reading</li>
    <li class="list-group-item list-group-item-secondary">3. Last reading will be used to report results in all
        cases</li>
    <li class="list-group-item">I confirm the above results Donored are accurate and true</li>
</ol>
<br>
<div class="row  flex flex-row">
    <div class="col-6">
        <p class="font-weight-bold">CLIENT CUT-OFF LEVEL</p>
        <input type="number" name="client_cut_off" class="form-control" style="width:100px;"> <p>μg/100ml</p> 
    </div>
    <div class="col-6">
        <p>Breathalyer Calibration Date</p>
        <input type="date" name="b_calib_dae" id="" class="form-control" >
    </div>
</div>
<label for="wit_sig">Signature</label>
<br>
<section class="signature-component">
        <canvas id="signature-pad" width="500" height="75"></canvas>
</section>
<br>
<label for="date_test">Date</label>
<input type="date" name="date_test" id="" class="form-control">