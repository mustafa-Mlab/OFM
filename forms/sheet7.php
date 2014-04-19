<?php if (!isset($_SESSION['id'])) header("locaton:../index.php"); ?>
<div class="row">
    <div class="col-md-12">
        <div class="center-align">
            <h2>জেলা পর্যায়ে </h2>
            <h3>মাসওয়ারী সারের চাহিদা নিরূপণ</h3>
        </div>
    </div>
</div>

<div class="sheet5"> 
    <form class="form-horizontal" action="process/sheet7_receive.php" method="POST">
        <div class="row">
            <div class="col-sm-4"> <?php Echo"জেলাঃ  " . $district; ?> </div>
            <div class="col-sm-4"> <?php Echo"অর্থবছরঃ   " . $_SESSION['ecoyear']; ?> </div>
        </div>

        <div class="form-group">
            <label for="fertilizer" class="col-sm-3 control-label">সারের নামঃ  </label>
            <div class="col-sm-7">
                <select class="form-control" name="fertilizer" id="fertilizer" >
                    <?php
                    Echo" <option selected='selected' >বাছাই করুন</option>";
                    $updated = 0;
                    $query = mysql_query("SELECT * FROM `sheet7` WHERE `district` = '" . $dist_id . "' and `ecoyear` = '" . $_SESSION['ecoyear_id'] . "' and updated = '" . $updated . "'");
                    If (mysql_num_rows($query) > 0){
                        while ($row = mysql_fetch_array($query)) {
                            $fertilizer_id = $row['fertilizer'];
                            $id = $row['id'];
                            $sql = mysql_query("SELECT * FROM `fertilizer`WHERE id = '" .$fertilizer_id ."'");
                            $fertilizer_info = mysql_fetch_array($sql);
                            $name = $fertilizer_info['name'];
                             echo '<option value="' .$id . '">' . $name . '</option>';
                        }
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="hidden">
            <input type="text" readonly id="fer" name="fer" />
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

<script>
    $("#fertilizer").change(function()
    {
        var id = $(this).val();
        var dataString = 'id=' + id;
        $.ajax
                ({
                    type: "POST",
                    url: "forms/ajax_sheet7.php",
                    data: dataString,
                    cache: false,
                    success: function(html)
                    {
//                        alert(html);
                        var res = html.split(",");
////                        res[0] is farmers number ,res[1] is land ammount and so on;
                        var fer = document.getElementById("fer");
                        fer.value = res[0];
                        var july = document.getElementById("july");
                        july.value = res[1];
                        var august = document.getElementById("august");
                        august.value = res[2];
                        var sep = document.getElementById("september");
                        sep.value = res[3];
                        var oct = document.getElementById("october");
                        oct.value = res[4];
                        var nov = document.getElementById("november");
                        nov.value = res[5];
                        var dec = document.getElementById("december");
                        dec.value = res[6];
                        var jan = document.getElementById("january");
                        jan.value = res[7];
                        var feb = document.getElementById("february");
                        feb.value = res[8];
                        var march = document.getElementById("march");
                        march.value = res[9];
                        var april = document.getElementById("april");
                        april.value = res[10];
                        var may = document.getElementById("may");
                        may.value = res[11];
                        var june = document.getElementById("june");
                        june.value = res[12];
                    }
                });
    });
</script>