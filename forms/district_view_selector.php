<div class="form-group">
    <label for="district" class="col-sm-4 control-label">জেলাঃ  </label>
    <div class="col-sm-8">
        <select class="form-control" name="district" id="district" >

            <?php
            Echo"<option selected='selected' value = '0'>বাছাই করুন </option>";
            Echo"<option  value='" . $dist_id . "'>" . $district . " </option>";
            ?>
        </select>
    </div>
</div>