<?php

session_start();
require '../config.php';
date_default_timezone_set('Asia/Dhaka');
$date = date('Y-m-d');
$_SESSION['date'] = $date;
$errflag = 0;
if (isset($_POST['submit'])) {
    $_SESSION['ecoyear_id'] = $_POST['ecoyear'];
    $query = mysql_query("SELECT * FROM `ecoyear` WHERE `id` = '" . $_SESSION['ecoyear_id'] . "'");
    $row = mysql_fetch_array($query);
    $_SESSION['ecoyear'] = $row['ecoyear'];
    $_SESSION['dist_id'] = $_POST['district'];
    $sql = mysql_query("SELECT * FROM `district` WHERE `id` = '" . $_SESSION['dist_id'] . "'");
    $data = mysql_fetch_array($sql);
    $_SESSION['district'] = $data['name'];
    $_SESSION['subdist_id'] = $_POST['subdistrict'];
    $sql = mysql_query("SELECT * FROM `subdistrict` WHERE `id` = '" . $_SESSION['subdist_id'] . "'");
    $data = mysql_fetch_array($sql);
    $_SESSION['subdistrict'] = $data['name'];
    $_SESSION['aez'] = $data['aez'];
} else
    $errflag++;

if ($errflag == 0) {
    echo 'hello';
    header("location:../sheet4.php");
    exit();
}
header("location:../home.php#sheet4");
?>
