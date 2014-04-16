<div class="form-group">
    <label for="union" class="col-sm-4 control-label">ইউনিয়নঃ  </label>
    <div class="col-sm-8">
        <select class="form-control" name="union" id="union" >
            <?php
            Echo"<option selected='selected''>বাছাই করুন </option>";
            Echo"<option  value='" . $union_id . "'>" . $union . " </option>";
            ?>
        </select>
    </div>
</div>