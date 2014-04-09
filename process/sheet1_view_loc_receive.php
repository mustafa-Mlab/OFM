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
            $_SESSION['ecoyear']=  $row['ecoyear'];
            $start = $row['submission_start'];
            $end = $row['submission_end'];
        }
    } else
        $errflag++;
    if (!empty($_POST['block'])) {
        $_SESSION['block_id'] = $_POST['block'];
        $result = mysql_query("SELECT * FROM block WHERE id='" . $_POST['block'] . "'");
        if ($result) {
            while ($row = mysql_fetch_array($result)) {
                $_SESSION['block'] = $row['name'];
            }
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
