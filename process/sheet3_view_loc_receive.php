<?php

session_start();
require '../config.php';
date_default_timezone_set('Asia/Dhaka');
$date = date('Y-m-d');
$_SESSION['date'] = $date;
$errflag = 0;
if (isset($_POST['submit'])) {
    if(!empty($_POST['ecoyear'])) {
        $_SESSION['ecoyear_id'] = $_POST['ecoyear'];
        $year = $_POST['ecoyear'];
        $query = mysql_query("SELECT * FROM ecoyear WHERE id= $year");
        $row = mysql_fetch_array($query);
        $_SESSION['ecoyear'] = $row['ecoyear'];
    } else {
        $errflag++;
        $_SESSION['error_msg'] = $_SESSION['error_msg'] . "</br> অর্থবছর বাছাই করুন";
    }
    if (!empty($_POST['district'])) {
        $_SESSION['district_id'] = $_POST['district'];
        $result = mysql_query("SELECT * FROM district WHERE id='" . $_SESSION['district_id'] . "'");
        $row = mysql_fetch_array($result);
        $_SESSION['district'] = $row['name'];
    } else{
        $errflag++;
        $_SESSION['error_msg'] = $_SESSION['error_msg'] . "</br> জেলা নির্বাচন করুন";
    }
    if (!empty($_POST['subdistrict'])) {
        $_SESSION['subdist_id'] = $_POST['subdistrict'];
        $result = mysql_query("SELECT * FROM subdistrict WHERE id='" . $_SESSION['subdist_id'] . "'");
        $row = mysql_fetch_array($result);
        $_SESSION['subdistrict'] = $row['name'];
    }  else{
        $errflag++;
        $_SESSION['error_msg'] = $_SESSION['error_msg'] . "</br> উপজেলা নির্বাচন করুন";
    }
    if (!empty($_POST['union'])) {
        $_SESSION['union_id'] = $_POST['union'];
        echo " Union id   " . $_SESSION['union_id'];
        $result = mysql_query("SELECT * FROM `union` WHERE id='" . $_SESSION['union_id'] . "' ");
        $row = mysql_fetch_array($result);
        $_SESSION['union'] = $row['name'];
        $_SESSION['aez'] = $row['aez'];
    } else{
        $errflag++;
        $_SESSION['error_msg'] = $_SESSION['error_msg'] . "</br> ইউনিয়ন নির্বাচন করুন";
    }
    $status = $_POST['status'];
    if ($status == '1')
        $_SESSION['table'] = "sheet3";
    else
        $_SESSION['table'] = "sheet3_alloted";
} else
    $errflag++;

if ($errflag == 0) {
    echo 'hello';
    header("location:../sheet3_view.php");
    exit();
}
header("location:../home.php#sheet3_view");
?>
