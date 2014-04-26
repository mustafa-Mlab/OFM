<?php

session_start();
include '../config.php';
if (isset($_POST['update_profile'])) {
$fname = $_POST['fname'];
$address = $_POST['address'];
$uname = $_POST['username'];
$mob = $_POST['mob'];
$sq = $_POST['sec_ques'];
$ans = $_POST['ans'];
$update = "UPDATE `ofm`.`user` SET `full_name` ='" . $fname . "' , address = '" . $address . "' , username= '" . $uname . "'  , mob= '" . $mob . "'  , sec_ques= '" . $sq . "' , ans= '" . $ans . "' WHERE `user`.`id` ='" . $_SESSION['id'] . "'";
    if (!mysql_query($update, $Link)) {
        die('Error: ' . mysql_error());
    }
    echo "1 record updated \n";
}
header("location:../home.php#proupdate");
?>