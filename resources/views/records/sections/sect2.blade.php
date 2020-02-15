<h5 class="font-weight-bold">Proof of Identity</h5>
<label for="">Photographic ID available for inspection</label>
<br>
<div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="id_available" id="inlineRadio1" value="yes">
    <label class="form-check-label" for="male">Yes</label>
    <div> - please complete <b> part 1</b> </div>
</div>
<div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="id_available" id="inlineRadio2" value="no">
    <label class="form-check-label" for="no">No</label>
    <div> - please complete <b> part 2</b> </div>
</div>
<br>
<p class="font-weight-bold mt-4">PART 1:</p>
<div class="form-group">
    <label for="type_of_id">Photo ID provided</label>
    <input type="text" name="type_of_id" class="form-control">
    <label for="id_number">Photo ID provided</label>
    <input type="number" name="id_number" class="form-control">
</div>
<p class="font-weight-bold mt-4">
    PART 2: An authorised person e.g. Employer/Solicitor must sign below
</p>
<p>
    I can confirm I am able to identify the sample donor and that are that the details entered above are accurate to  the best of my knowledge.
</p>
<br>
<div class="form-group">
    <label for="wit_name">Print Name</label>
    <input type="text" name="wit_name" class="form-control">
    <label for="wit_sig">Signature</label>
    <br>
    <section class="signature-component">
            <canvas id="signature-pad" width="500" height="75"></canvas>
    </section>
    <label for="relationship_donor">Relationship to Donor</label>
    <input type="text" name="relationship_donor" class="form-control">
    <label for="wit_company">Employer</label>
    <input type="text" name="wit_company" class="form-control">
</div>