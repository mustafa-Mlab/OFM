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
    $_SESSION['union_id'] = $_POST['union'];
    $sql = mysql_query("SELECT * FROM `union` WHERE id ='" . $_SESSION['union_id'] . "'");
    $row = mysql_fetch_array($sql);
    $_SESSION['aez'] = $row['aez'];

    $_SESSION['dist_id'] = $_POST['district'];
    $sql = mysql_query("SELECT * FROM `district` WHERE id ='" . $_SESSION['dist_id'] . "'");
    $row = mysql_fetch_array($sql);
    $_SESSION['district'] = $row['name'];
} else
    $errflag++;

if ($errflag == 0) {
    echo 'hello';
    header("location:../sheet3.php");
    exit();
}
header("location:../home.php#sheet3");
?>
