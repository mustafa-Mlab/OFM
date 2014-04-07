<?php

session_start();
require '../config.php';
date_default_timezone_set('Asia/Dhaka');
$date = date('Y-m-d');
$_SESSION['date'] = $date;
$errflag = 0;
if (isset($_POST['submit'])) {
    if (!empty($_POST['ecoyear'])) {
//        $_SESSION['ecoyear']= $_POST['ecoyear'];
        $year = $_POST['ecoyear'];
        $query = mysql_query("SELECT * FROM ecoyear WHERE id= $year");
        while ($row = mysql_fetch_array($query)) {
            $start = $row['submission_start'];
            $end = $row['submission_end'];
            
        }
    } else
        $errflag++;
    if (!empty($_POST['district'])) {
        $_SESSION['district'] = $_POST['district'];
    } else
        $errflag++;
    if (!empty($_POST['subdistrict'])) {
        $_SESSION['subdistrict'] = $_POST['subdistrict'];
    } else
        $errflag++;
    if (!empty($_POST['union'])) {
        $_SESSION['union'] = $_POST['union'];
    } else
        $errflag++;
    if (!empty($_POST['block'])) {
        $_SESSION['block'] = $_POST['block'];
    } else
        $errflag++;
} else
    $errflag++;

if ($errflag == 0) {
    echo 'hello';
    header("location:../sheet1.php");
    exit();
}
header("location:../home.php");
?>
