<?php
include '../config.php';
?>
<div class="form-group">
    <label for="district" class="col-sm-4 control-label">জেলাঃ  </label>
    <div class="col-sm-8">
        <select class="form-control" name="district" id="district" >

            <?php
            Echo"<option selected='selected' value='0'>বাছাই করুন </option>";
            $result = mysql_query("SELECT * FROM district");
            while ($row = mysql_fetch_array($result)) {
                Echo"<option value=\"" . $row['id'] . "\">" . $row['name'] . "</option>";
            }
            ?>
        </select>
    </div>
</div>