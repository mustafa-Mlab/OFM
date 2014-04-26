<!--এই ফর্ম টা নতুন ইউজার নিবন্ধনের জন্য ,
যখন ব্যাবহারকারীর পর্যায় নির্দিষ্ট করা হবে তখনই তার নির্দিষ্ট ঠিকানার ফর্ম চলে আসবে-->
<?php
include '../config.php';
session_start();
?>
<div>
    <?php
    if (isset($_SESSION['error_msg'])) {
        echo $_SESSION['error_msg'];
        $_SESSION['error_msg'] = '';
    }
    ?>
</div>
<?php
$sql = mysql_query("SELECT * FROM `user` WHERE `id` = '" . $_SESSION['id'] . "'");
$row = mysql_fetch_array($sql);
?>
<form class="form-horizontal" role="form" action="process/update_profile.php" method="post">
    <div class="form-group">
        <label for="full_name" class="col-sm-4 control-label">পূর্ণ নাম </label>
        <div class="col-sm-8">
            <input type="text" required class="form-control" id="fname" name="fname" <?php echo"value= '" .$row['full_name']."'"; ?>  >
        </div>
    </div>
    <div class="form-group">
        <label for="address" class="col-sm-4 control-label">ঠিকানাঃ </label>
        <div class="col-sm-8">
            <input type="text" required class="form-control" id="address" name="address"<?php echo"value= '" .$row['address']."'"; ?>  >
        </div>
    </div>
    <div class="form-group">
        <label for="username" class="col-sm-4 control-label">ইউজার আইডিঃ </label>
        <div class="col-sm-8">
            <input type="text" required class="form-control" id="username" name="username" <?php echo"value= '" .$row['username']."'"; ?>  >
        </div>
    </div>
    <div class="form-group">
        <label for="mobile_no" class="col-sm-4 control-label">মোবাইল নাম্বারঃ </label>
        <div class="col-sm-8">
            <input type="text" required class="form-control" id="mob" name="mob" <?php echo"value= '" .$row['mob']."'"; ?>  >
        </div>
    </div>
    <div class="form-group">
        <label for="sec_ques" class="col-sm-4 control-label">গোপন প্রস্নঃ </label>
        <div class="col-sm-8">
            <input type="text" required class="form-control" id="sec_ques" name="sec_ques" <?php echo"value= '" .$row['sec_ques']."'"; ?> >
        </div>
    </div>
    <div class="form-group">
        <label for="ans" class="col-sm-4 control-label">উত্তরঃ </label>
        <div class="col-sm-8">
            <input type="text" required class="form-control" id="ans" name="ans"<?php echo"value= '" .$row['ans']."'"; ?> >
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-4 col-sm-3">
            <button type="submit" class="button btn btn-default" name="update_profile" id="update_profile">SAVE</button>
        </div>
    </div>
</form>
