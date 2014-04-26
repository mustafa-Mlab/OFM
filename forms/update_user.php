<?php
include '../config.php';
?>
<form class="form-horizontal" action="process/updateuser.php" method="post">
    <div class="form-group">
        <label for="user" class="col-sm-4 control-label">User  </label>
        <div class="col-sm-8">
            <select class="form-control" name="user" id="user" >

                <?php
                Echo"<option selected='selected' value='0'>বাছাই করুন </option>";
                $result = mysql_query("SELECT * FROM `user`");
                while ($row = mysql_fetch_array($result)) {
                    Echo"<option value=\"" . $row['id'] . "\">" . $row['username'] . "</option>";
                }
                ?>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label for="fname" class="col-sm-4 control-label">Full name </label>
        <div class="col-sm-8">
            <input type="text" readonly class="form-control" id="fname" name="fname" placeholder="পূর্ণ নাম ">
        </div>
    </div>
    <div class="form-group">
        <label for="address" class="col-sm-4 control-label">Address</label>
        <div class="col-sm-8">
            <input type="text" readonly class="form-control" id="address" name="address" placeholder="ঠিকানা">
        </div>
    </div>
    <div class="form-group">
        <label for="mob" class="col-sm-4 control-label">Mobile number</label>
        <div class="col-sm-8">
            <input type="text" readonly class="form-control" id="mob" name="mob" placeholder="মোবাইল নাম্বার">
        </div>
    </div>
    <div id="district_form" class="hidden"> 
        <div class="form-group">
            <label for="district" class="col-sm-4 control-label">District</label>
            <div class="col-sm-8">
                <input type="text" readonly class="form-control" id="district" name="district" placeholder="জেলা ">
            </div>
        </div>
    </div>
    <div id="subdistrict_form" class="hidden"> 
        <div class="form-group">
            <label for="subdistrict" class="col-sm-4 control-label">Subdistrict</label>
            <div class="col-sm-8">
                <input type="text" readonly class="form-control" id="subdistrict" name="subdistrict" placeholder="উপজেলা">
            </div>
        </div>
    </div>
    <div id="union_form" class="hidden"> 
        <div class="form-group">
            <label for="union" class="col-sm-4 control-label">Union</label>
            <div class="col-sm-8">
                <input type="text" readonly class="form-control" id="union" name="union" placeholder="ইউনিয়ন">
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="reg_date" class="col-sm-4 control-label">Registration Date</label>
        <div class="col-sm-8">
            <input type="text" readonly class="form-control" id="reg_date" name="reg_date" placeholder="নিবন্ধনের তারিখ">
        </div>
    </div>
    <!--    <div class="form-group">
            <label for="lavel" readonly class="col-sm-4 control-label">Lavel</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="lavel" name="lavel" placeholder="পর্যায় ">
            </div>
        </div>-->
    <div class="form-group">
        <label for="user" class="col-sm-4 control-label">status </label>
        <div class="col-sm-8">
            <select class="form-control" name="status" id="status" >
                <option  value='1'>Enable</option>
                <option  value='0'>disable</option>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <div class=" col-sm-offset-4 col-sm-3" id="reset">
                    <h4 class="button tb">Reset Password</h4>
                </div>
                <div class="col-sm-4 ">
                    <button type="submit" class="button btn btn-default" name="update_user" id="update_user">Update</button>
                </div>
            </div>
        </div>
    </div>
</form>

<script>
    $("#user").change(function()
    {
        var id = $(this).val();
        var dataString = 'id=' + id;
        $.ajax
                ({
                    type: "POST",
                    url: "forms/ajax_userupdate.php",
                    data: dataString,
                    cache: false,
                    success: function(html)
                    {
                        //                        alert(html);
                        var res = html.split("_");
                        var fname = document.getElementById("fname");
                        fname.value = res[0];
                        var address = document.getElementById("address");
                        address.value = res[1];
                        var mob = document.getElementById("mob");
                        mob.value = res[2];
                        var district = document.getElementById("district");
                        district.value = res[3];
                        var subdistrict = document.getElementById("subdistrict");
                        subdistrict.value = res[4];
                        var union = document.getElementById("union");
                        union.value = res[5];
                        var rd = document.getElementById("reg_date");
                        rd.value = res[6];
//                        var lavel = document.getElementById("lavel");
//                        lavel.value = res[7];
                        if (res[7] < 2)
                            $('#union_form').removeClass('hidden');
                        else
                            $('#union_form').addClass('hidden');
                        if (res[7] < 2)
                            $('#subdistrict_form').removeClass('hidden');

                        else
                            $('#subdistrict_form').addClass('hidden');
                        if (res[7] < 2)
                            $('#district_form').removeClass('hidden');
                        else
                            $('#district_form').addClass('hidden');
                    }
                });
    });
</script>
<script>
    $("#reset").click(function()
    {
        var check = confirm("Password will set as '12345678'. This is a one way process, do you really want to proceed");
        if (check == true) {
            var e = document.getElementById("user");
            var user = e.options[e.selectedIndex].value;
            if (user == 0)
                alert(" you have to chose a user first !!!")
//         alert(user);
        }
//        var id = $(this).val();
        var dataString = 'id=' + user;
        $.ajax
                ({
                    type: "POST",
                    url: "process/resetuserpassword.php",
                    data: dataString,
                    cache: false,
                    success: function(html)
                    {
                        if (html == 1)
                            alert("Reset sucessfully run");
                        else
                            alert('cannot reset this user password at this moment please try at latter');
                    }
                });
    });
</script>