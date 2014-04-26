<?php if (!isset($_SESSION['id'])) header("locaton:../index.php"); ?>
<div class="row">
    <div class="col-md-12">
        <div class="center-align">
            <h2>উপজেলা পর্যায়ে </h2>
            <h3>মাসওয়ারী সারের চাহিদা নিরূপণ</h3>
        </div>
    </div>
</div>

<div class="sheet5"> 
    <form class="form-horizontal" action="process/sheet5_receive.php" method="POST">
        <div class="row">
            <div class="col-sm-3"><?php Echo"উপজেলাঃ   " . $_SESSION['ssubdistrict']; ?> </div>
            <div class="col-sm-3"> <?php Echo"জেলাঃ  " . $_SESSION['district']; ?> </div>
            <div class="col-sm-2"> <?php Echo"অর্থবছরঃ   " . $_SESSION['ecoyear']; ?> </div>
            <div class="col-sm-4"> <?php Echo"এ ই জেডঃ   " . $_SESSION['aez']; ?> </div>
        </div>

        <div class="form-group">
            <label for="fertilizer" class="col-sm-3 control-label">সারের নামঃ  </label>
            <div class="col-sm-7">
                <select class="form-control" name="fertilizer" id="fertilizer" >
                    <?php
                    Echo" <option selected='selected' >বাছাই করুন</option>";
                    $sql = mysql_query("SELECT * FROM `fertilizer`ORDER BY id");
                    while ($row = mysql_fetch_array($sql)) {
                        $id = $row['id'];
                        $name = $row['name'];

                        $query = mysql_query("SELECT * FROM `sheet5` WHERE `fertilizar`='".$id. "' and`subdistrict` = '".$subdist_id. "' and `ecoyear` = '".$_SESSION['ecoyear_id']. "' ORDER BY fertilizar");
                        If (mysql_num_rows($query) == 0)
                            echo '<option value="' . $id . '">' . $name . '</option>';
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="july" class="col-sm-4 control-label">১৪ জুলাই </label>
                    <div class="col-sm-8">
                        <input type="text" required class="form-control" id="july" name="july" ">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="august" class="col-sm-4 control-label">১৪ আগস্ট </label>
                    <div class="col-sm-8">
                        <input type="text" required class="form-control" id="august" name="august" ">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="september" class="col-sm-4 control-label">১৪ সেপ্টেম্বর </label>
                    <div class="col-sm-8">
                        <input type="text" required class="form-control" id="september" name="september" ">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="october" class="col-sm-4 control-label">১৪ অক্টোবর </label>
                    <div class="col-sm-8">
                        <input type="text" required class="form-control" id="october" name="october" ">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="november" class="col-sm-4 control-label">১৪ নভেম্বর </label>
                    <div class="col-sm-8">
                        <input type="text" required class="form-control" id="november" name="november" ">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="december" class="col-sm-4 control-label">১৪ ডিসেম্বর </label>
                    <div class="col-sm-8">
                        <input type="text" required class="form-control" id="december" name="december" ">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="january" class="col-sm-4 control-label">১৪ জানুয়ারি </label>
                    <div class="col-sm-8">
                        <input type="text" required class="form-control" id="january" name="january" ">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="february" class="col-sm-4 control-label">১৪ ফেব্রুয়ারি </label>
                    <div class="col-sm-8">
                        <input type="text" required class="form-control" id="february" name="february" ">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="march" class="col-sm-4 control-label">১৪ মার্চ </label>
                    <div class="col-sm-8">
                        <input type="text" required class="form-control" id="march" name="march" ">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="april" class="col-sm-4 control-label">১৪ এপ্রিল </label>
                    <div class="col-sm-8">
                        <input type="text" required class="form-control" id="april" name="april" ">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="may" class="col-sm-4 control-label">১৪ মে </label>
                    <div class="col-sm-8">
                        <input type="text" required class="form-control" id="may" name="may" ">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="june" class="col-sm-4 control-label">১৪ জুন </label>
                    <div class="col-sm-8">
                        <input type="text" required class="form-control" id="june" name="june" ">
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group hidden">
            <label for="district" class="col-sm-4 control-label">উপজেলাঃ  </label>
            <div class="col-sm-8">
                <select class="form-control" name="subdistrict" id="subdistrict" >

                    <?php
                    Echo"<option selected='selected' value='" . $subdist_id . "'>" . $subdistrict . " </option>";
                    ?>
                </select>
            </div>
        </div>

        <div class="form-group hidden">
            <label for="ecoyear" class="col-sm-4 control-label">অর্থবছরঃ  </label>
            <div class="col-sm-8">
                <select class="form-control" name="ecoyear" id="ecoyear" >
                    <?php
                    Echo"<option selected='selected' value='" . $_SESSION['ecoyear_id'] . "'>" . $_SESSION['ecoyear'] . " </option>";
                    ?>
                </select>
            </div>
        </div>

        <div class="form-group hidden">
            <label for="district" class="col-sm-4 control-label">জেলা  </label>
            <div class="col-sm-8">
                <select class="form-control" name="district" id="district">
                    <?php
                    Echo" <option selected='selected' value='" . $dist_id . "'>" . $district . " </option>";
                    ?>
                </select>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-12 right-align ">
                <button type="submit" class="button btn btn-default" name="submit" id="submit">Submit </button>
            </div>
        </div>
    </form>
    <div class="row">
        <div class="col-md-12"></div>
    </div>
</div>

