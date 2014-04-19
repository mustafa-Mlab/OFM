<?php

session_start();
require '../config.php';
date_default_timezone_set('Asia/Dhaka');
$date = date('Y-m-d');
$_SESSION['date'] = $date;
$errflag = 0;
if (isset($_POST['submit'])) {
    if (!empty($_POST['ecoyear'])) {
        $_SESSION['ecoyear_id'] = $_POST['ecoyear'];
        $year = $_POST['ecoyear'];
        $query = mysql_query("SELECT * FROM ecoyear WHERE id= $year");
        while ($row = mysql_fetch_array($query)) {
            $_SESSION['ecoyear'] = $row['ecoyear'];
//            $start = $row['submission_start'];
//            $end = $row['submission_end'];
        }
    } else
        $errflag++;
    if (!empty($_POST['district'])) {
        $_SESSION['district_id'] = $_POST['district'];
        $result = mysql_query("SELECT * FROM district WHERE id='" . $_SESSION['district_id'] . "'");
        $row = mysql_fetch_array($result);
        $_SESSION['district'] = $row['name'];
    } else
        $errflag++;
    if (!empty($_POST['subdistrict'])) {
        $_SESSION['subdist_id'] = $_POST['subdistrict'];
        $result = mysql_query("SELECT * FROM subdistrict WHERE id='" . $_SESSION['subdist_id'] . "'");
        $row = mysql_fetch_array($result);
        $_SESSION['subdistrict'] = $row['name'];
    } else
        $errflag++;
} else
    $errflag++;

if ($errflag == 0) {
    echo 'hello';
    header("location:../sheet5_view.php");
    exit();
}
header("location:../home.php#sheet5_view");
?>
