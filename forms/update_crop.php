<?php include '../config.php'; ?>
﻿<div class="right-align">
    <h2>ফসলের নাম নিবন্ধন করুনঃ</h2>
</div>
<form class="form-horizontal" role="form" action="process/update_crop.php" method="post">
    <div class="form-group">
    <label for="crop" class="col-sm-4 control-label">ফসলঃ  </label>
    <div class="col-sm-8">
        <select class="form-control" name="crop" id="crop" >

            <?php
            Echo"<option selected='selected' value='0'>বাছাই করুন </option>";
            $result = mysql_query("SELECT * FROM `crop`");
            while ($row = mysql_fetch_array($result)) {
                Echo"<option value=\"".$row['id']."\">".$row['name']."</option>";
            }
            ?>
        </select>
    </div>
</div>
    <div class="form-group">
        <label for="name" class="col-sm-4 control-label">ফসলের নামঃ </label>
        <div class="col-sm-8">
            <input type="text" class="form-control" id="name" name="name" placeholder="ফসলের নামঃ">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-6">
            <button type="submit" class="button btn btn-default" name="update_crop" id="update_crop">Update </button>
        </div>
    </div>
</form>