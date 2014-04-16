<div class="form-group">
    <label for="block" class="col-sm-4 control-label">ব্লকঃ  </label>
    <div class="col-sm-8">
        <select class="form-control" name="block" id="block" >
            <?php
            echo '<option selected="selected" > বাছাই করুন </option>';
            $result = mysql_query("SELECT * FROM block WHERE union_id='" . $union_id . "'");
            if ($result) {
                while ($row = mysql_fetch_array($result)) {
                    Echo"<option value='" . $row['id'] . "'>" . $row['name'] . " </option>";
                }
            }
            ?>
        </select>
    </div>
</div>