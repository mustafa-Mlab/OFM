<?php

session_start();
require '../config.php';
date_default_timezone_set('Asia/Dhaka');
$date = date('Y-m-d');
$_SESSION['date'] = $date;
$errflag = 0;
if (isset($_POST['submit'])) {
    $_SESSION['ecoyear_id'] = $_POST['ecoyear'];
    $year = $_POST['ecoyear'];
    $query = mysql_query("SELECT * FROM ecoyear WHERE id= $year");
    $row = mysql_fetch_array($query);
    $_SESSION['ecoyear'] = $row['ecoyear'];
    if (!empty($_POST['district'])) {
        $_SESSION['dist_id'] = $_POST['district'];
        $result = mysql_query("SELECT * FROM `district` WHERE `id`='" . $_SESSION['dist_id'] . "'");
        $row = mysql_fetch_array($result);
        $_SESSION['district'] = $row['name'];
    } else
        $errflag++;
    if (!empty($_POST['subdistrict'])) {
        $_SESSION['subdist_id'] = $_POST['subdistrict'];
        $result = mysql_query("SELECT * FROM `subdistrict` WHERE `id`='" . $_SESSION['subdist_id'] . "'");
        $row = mysql_fetch_array($result);
        $_SESSION['subdistrict'] = $row['name'];
    } else
        $errflag++;
    if (!empty($_POST['union'])) {
        $_SESSION['union_id'] = $_POST['union'];
        $result = mysql_query("SELECT * FROM `union` WHERE `id`='" . $_SESSION['union_id'] . "'");
        $row = mysql_fetch_array($result);
        $_SESSION['union'] = $row['name'];
    } else
        $errflag++;
    if (!empty($_POST['block'])) {
        $_SESSION['block_id'] = $_POST['block'];
        $result = mysql_query("SELECT * FROM block WHERE id='" . $_SESSION['block_id'] . "'");
        while ($row = mysql_fetch_array($result)) {
            $_SESSION['block'] = $row['name'];
            $_SESSION['aez'] = $row['aez'];
        }
    } else
        $errflag++;
} else
    $errflag++;

if ($errflag == 0) {
    echo 'hello';
    header("location:../sheet1_view.php");
    exit();
}
header("location:../home.php#sheet1_view");
?>
