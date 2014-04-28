<div class="form-group">
    <label for="district" class="col-sm-4 control-label">উপজেলাঃ  </label>
    <div class="col-sm-8">
        <select class="form-control" name="subdistrict" id="subdistrict" >

            <?php
            Echo"<option selected='selected' value='0'>বাছাই করুন </option>";
            Echo"<option value='" . $subdist_id . "'>" . $subdistrict . " </option>";
            ?>
        </select>
    </div>
</div>