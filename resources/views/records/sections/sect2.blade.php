<h5 class="font-weight-bold">Proof of Identity</h5>
<label for="">Photographic ID available for inspection</label>
<br>
<div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="id_available" id="inlineRadio1" value="1">
    <label class="form-check-label" for="">Yes</label>
    <div> - please complete <b> part 1</b> </div>
</div>
<div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="id_available" id="inlineRadio2" value="0">
    <label class="form-check-label" for="id_available">No</label>
    <div> - please complete <b> part 2</b> </div>
</div>
<br>
<p class="font-weight-bold mt-4">PART 1:</p>
<div class="form-group">
    <label for="type_of_id">Photo ID provided</label>
    <input type="text" name="type_of_id" class="form-control">
    <label for="id_number">ID related number</label>
    <input type="text" name="id_number" class="form-control">
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
    <div id="signature-pad" class="m-signature-pad">
            <div class="m-signature-pad--body">
                <canvas style="border: 2px dashed #ccc"></canvas>
            </div>
        
            <div class="m-signature-pad--footer">
                <button type="button" class="btn btn-sm btn-secondary" data-action="clear">Clear</button>
                <button type="button" class="btn btn-sm btn-primary" data-action="save">Save</button>
            </div>
        </div>
    <label for="relationship_donor">Relationship to Donor</label>
    <input type="text" name="relationship_donor" class="form-control">
    <label for="wit_company">Employer</label>
    <input type="text" name="wit_company" class="form-control">
</div>