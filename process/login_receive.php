<?php

session_start();
include '../config.php';
$_SESSION['error_msg']='';
$errflag =0;
$found = 0;

if (isset($_POST['login'])) {
    echo'Submitted   ';
    if (isset($_POST['lavel']) && !empty($_POST['lavel'])) {
        $lavel = $_POST['lavel'];
    } else {
        $errflag++;
        $err = $_SESSION['error_msg'];
        $_SESSION['error_msg'] = "পর্যায় নির্দেশিত হয়নি ," . $err;
    }

    if (isset($_POST['username']) && !empty($_POST['username'])) {
        $username = $_POST['username'];
    } else {
        $errflag++;
        $err = $_SESSION['error_msg'];
        $_SESSION['error_msg'] = "ইউজার আইডি প্রবেশ করুন , ". $err;
    }
    if (isset($_POST['pass']) && !empty($_POST['pass'])) {
        $pass = $_POST['pass'];
    } else {
        $errflag++;
        $err = $_SESSION['error_msg'];
        $_SESSION['error_msg'] = "পাসওয়ার্ড প্রবেশ করান ,". $err;
    }
}
else 
{$errflag = 1;$err = $_SESSION['error_msg'];
        $_SESSION['error_msg'] = "Technical problem please contuct to admiin ,". $err;}

if ($errflag == 0) {
    echo $pass;
    $query = mysql_query("SELECT * FROM user WHERE username='" . $username . "'");
    while ($row = mysql_fetch_array($query)) {
        if (strcmp($pass,$row['pass']) == 0) {
            if ($lavel == $row['right_lavel']) {
                $id = $row['id'];
                $found++;
            }
        }
    }
    if ($found == 1) {
        $_SESSION['id'] = $id;
        header("location:../ofm.php");
        exit();
    }
}
echo 'failed   ' . $_SESSION['error_msg'];
//header("location:../index.php");
?>
