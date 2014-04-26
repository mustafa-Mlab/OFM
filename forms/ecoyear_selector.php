<?php
include '../config.php';
?>
<div class="form-group">
    <label for="ecoyear" class="col-sm-4 control-label">অর্থবছরঃ  </label>
    <div class="col-sm-8">
        <select class="form-control" name="ecoyear" id="ecoyear" >

            <?php
            $result = mysql_query("SELECT * FROM ecoyear WHERE `enabled` = 1");
            while ($row = mysql_fetch_array($result)) {
                Echo"<option value=\"";
                echo $row['id'];
                Echo"\">";
                echo $row['ecoyear'];
                Echo "</option>";
            }
            ?>
        </select>
    </div>
</div>