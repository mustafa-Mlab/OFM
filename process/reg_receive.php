<?php

session_start();
include '../config.php';
$errflag = 0;
$found = 0;
$district = -1;
$subdistrict = -1;
$union = -1;
$block = -1;
$area = -1;
if (isset($_POST['add_user'])) {
    if (!empty($_POST['lavel_user'])) {
        $lavel = $_POST['lavel_user'];
    } else {
        $errflag++;
        $_SESSION['error_msg'] = 'select lavel';
    }

    if (!empty($_POST['full_name'])) {
        $fname = $_POST['full_name'];
    } else {
        $errflag++;
        $_SESSION['error_msg'] = 'Enter Full Name';
    }
    if (!empty($_POST['address'])) {
        $address = $_POST['address'];
    } else {
        $errflag++;
        $_SESSION['error_msg'] = 'Enter address';
    }

    if (!empty($_POST['username'])) {
        $uname = $_POST['username'];
    } else {
        $errflag++;
        $_SESSION['error_msg'] = 'Enter Username';
    }
    $pass = "12345678";
    $enpass = md5($pass);
    if (!empty($_POST['mobile_no'])) {
        $mob = $_POST['mobile_no'];
    } else {
        $errflag++;
        $_SESSION['error_msg'] = 'Enter Mobile Number';
    }
    if ((!empty($_POST['district'])) && isset($_POST['district']))
        $district = $_POST['district'];
    if ((!empty($_POST['subdistrict'])) && isset($_POST['subdistrict']))
        $subdistrict = $_POST['subdistrict'];
    if ((!empty($_POST['union'])) && isset($_POST['union']))
        $union = $_POST['union'];
}
if ($errflag == 0) {
    $result = mysql_query("SELECT * FROM `user` WHERE mob ='" . $mob . "");
    If (mysql_num_rows($result) > 0)
        $found == 1;
    if ($found != 0) {
        $_SESSION['error_flag'] = "Mobile number already exist";
    } else {
        date_default_timezone_set('Asia/Dhaka');
        $date = date('Y-m-d');

        $sql = "INSERT INTO `user` (`reg_date`, `mob`, `full_name`, `address`, `username`, `pass`, `right_lavel`, `district`, `subdistrict`, `union_loc`) "
                . "                      VALUES ('$date' , '$mob' ,  '$fname' ,'$address' , '$uname' , '$enpass' , '$lavel ', '$district' , '$subdistrict' , '$union' )";
        if (!mysql_query($sql, $Link)) {
            die('Error: ' . mysql_error());
        }
        echo "1 record added \n";
    }
} else {
    echo "ERROR " . $_SESSION['error_msg'];
}
header("location:../administration.php#add_user");
?>