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
        $row = mysql_fetch_array($query);
        $_SESSION['ecoyear'] = $row['ecoyear'];
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
        $_SESSION['aez'] = $row['aez'];
    } else
        $errflag++;
    $status = $_POST['status'];
    if ($status == '1')
        $_SESSION['table'] = "sheet4";
    else
        $_SESSION['table'] = "sheet4_alloted";
} else
    $errflag++;

if ($errflag == 0) {
    echo 'hello';
    header("location:../sheet4_view.php");
    exit();
}
header("location:../home.php#sheet4_view");
?>
