<!--এই ফর্ম টা নতুন ইউজার নিবন্ধনের জন্য ,
যখন ব্যাবহারকারীর পর্যায় নির্দিষ্ট করা হবে তখনই তার নির্দিষ্ট ঠিকানার ফর্ম চলে আসবে-->
<?php
$url = htmlspecialchars($_SERVER['HTTP_REFERER']);
echo "<a class='button' href='$url'>Back</a>";
?>
﻿<div class="right-align">
    <h2>নিবন্ধন </h2>
</div>
<div>
    <?php
    if (isset($_SESSION['error_msg'])) {
        echo $_SESSION['error_msg'];
        $_SESSION['error_msg'] = '';
    }
    ?>
</div>
<form class="form-horizontal" role="form" action="process/reg_receive.php" method="post">
    <div class="form-group">
        <label for="lavel_user" class="col-sm-4 control-label">পর্যায়ঃ  </label>
        <div class="col-sm-8">
            <select class="form-control" name="lavel_user" id="lavel_user" >
                <option selected="selected" value="0">বাছাই করুন </option>
                <option value="1">ব্লক </option>
                <option value="2">ইউনিয়ন </option>
                <option value="3">উপজেলা </option>
                <option value="4">জেলা</option>
                <option value="5">আঞ্চলিক অফিস</option>
                <option value="6">সদর দপ্তর</option>
                <option value="7">মন্ত্রণালয় </option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label for="full_name" class="col-sm-4 control-label">পূর্ণ নাম </label>
        <div class="col-sm-8">
            <input type="text" required class="form-control" id="full_name" name="full_name" placeholder="full_name">
        </div>
    </div>
    <div class="form-group">
        <label for="address" class="col-sm-4 control-label">ঠিকানাঃ </label>
        <div class="col-sm-8">
            <input type="text" required class="form-control" id="address" name="address" placeholder="address">
        </div>
    </div>
    <div class="form-group">
        <label for="username" class="col-sm-4 control-label">ইউজার আইডিঃ </label>
        <div class="col-sm-8">
            <input type="text" required class="form-control" id="username" name="username" placeholder="username">
        </div>
    </div>
    <div class="form-group">
        <label for="pass1" class="col-sm-4 control-label">পাসওয়ার্ডঃ </label>
        <div class="col-sm-8">
            <input type="password" required class="form-control" id="pass1" name="pass1" placeholder="Password">
        </div>
    </div>
    <div class="form-group">
        <label for="pass2" class="col-sm-4 control-label">নিশ্চিত করুনঃ </label>
        <div class="col-sm-8">
            <input type="password" required class="form-control" id="pass2" name="pass2" onkeyup="checkPass();
                    return false;" placeholder="Confirm Password">
            <span id="confirmMessage" class="confirmMessage"></span>
        </div>
    </div>

    <div class="form-group">
        <label for="mobile_no" class="col-sm-4 control-label">মোবাইল নাম্বারঃ </label>
        <div class="col-sm-8">
            <input type="text" required class="form-control" id="mobile_no" name="mobile_no" placeholder="Mobile number">
        </div>
    </div>
    <div class="form-group">
        <label for="sec_ques" class="col-sm-4 control-label">গোপন প্রস্নঃ </label>
        <div class="col-sm-8">
            <input type="text" required class="form-control" id="sec_ques" name="sec_ques" placeholder="Sectete Question">
        </div>
    </div>
    <div class="form-group">
        <label for="ans" class="col-sm-4 control-label">উত্তরঃ </label>
        <div class="col-sm-8">
            <input type="text" required class="form-control" id="ans" name="ans" placeholder="Answer">
        </div>
    </div>

    <div id="location"> </div>

    <div id="district_form" class="hidden">

        <?php require './district_selector.php'; ?>
    </div>
    <div id="subdistrict_form" class="hidden">
        <?php require './subdistrict_selector.php'; ?>
    </div>
    <div id="union_form" class="hidden">
        <?php require './union_selector.php'; ?>
    </div>
<!--    <div id="block_form" class="hidden">
        <?php require './block_selector.php'; ?>
    </div>-->
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-6">
            <button type="submit" class="btn btn-default" name="add_user" id="add_user">যোগ করুন</button>
        </div>
    </div>
</form>

<script>
    $('#lavel_user').on('change', function() {
        var x = $('#lavel_user').val();
        switch (x)
        {
            case "1":
                $('#union_form').removeClass('hidden');
                $('#block_form').removeClass('hidden');
                $('#subdistrict_form').removeClass('hidden');
                $('#district_form').removeClass('hidden');
                $('#area_form').addClass('hidden');

                break;
            case "2":
                $('#union_form').removeClass('hidden');
                $('#block_form').addClass('hidden');
                $('#subdistrict_form').removeClass('hidden');
                $('#district_form').removeClass('hidden');
                $('#area_form').addClass('hidden');

                break;
            case "3":
                $('#union_form').addClass('hidden');
                $('#block_form').addClass('hidden');
                $('#subdistrict_form').removeClass('hidden');
                $('#district_form').removeClass('hidden');
                $('#area_form').addClass('hidden');

                break;
            case "4":
                $('#union_form').addClass('hidden');
                $('#block_form').addClass('hidden');
                $('#subdistrict_form').addClass('hidden');
                $('#district_form').removeClass('hidden');
                $('#area_form').addClass('hidden');

                break;
            case "5":
                $('#union_form').addClass('hidden');
                $('#block_form').addClass('hidden');
                $('#subdistrict_form').addClass('hidden');
                $('#district_form').addClass('hidden');
                $('#area_form').removeClass('hidden');
                break;
            default :
                $('#union_form').addClass('hidden');
                $('#block_form').addClass('hidden');
                $('#subdistrict_form').addClass('hidden');
                $('#district_form').addClass('hidden');
                $('#area_form').addClass('hidden');

                break;
        }
        ;
    });
</script>

<script>
    function checkPass()
    {
        //Store the password field objects into variables ...
        var pass1 = document.getElementById('pass1');
        var pass2 = document.getElementById('pass2');
        //Store the Confimation Message Object ...
        var message = document.getElementById('confirmMessage');
        //Set the colors we will be using ...
        var goodColor = "#66cc66";
        var badColor = "#ff6666";
        //Compare the values in the password field
        //and the confirmation field
        if (pass1.value === pass2.value) {
            //The passwords match.
            //Set the color to the good color and inform
            //the user that they have entered the correct password
            pass2.style.backgroundColor = goodColor;
            message.style.color = goodColor;
            message.innerHTML = "Passwords Match!";
        } else {
            //The passwords do not match.
            //Set the color to the bad color and
            //notify the user.
            pass2.style.backgroundColor = badColor;
            message.style.color = badColor;
            message.innerHTML = "Passwords Do Not Match!";
        }
    }
</script>