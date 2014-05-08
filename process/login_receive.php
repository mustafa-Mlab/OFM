<?php

session_start();
include '../config.php';
$_SESSION['error_msg'] = '';
$errflag = 0;
if (isset($_POST['login'])) {
    if (isset($_POST['lavel']) && !empty($_POST['lavel'])) {
        $lavel = $_POST['lavel'];
    } else {
        $errflag++;
        $_SESSION['error_msg'] = $_SESSION['error_msg'] . "পর্যায় নির্দেশিত হয়নি ,";
    }
    if (isset($_POST['username']) && !empty($_POST['username'])) {
        $username = $_POST['username'];
    } else {
        $errflag++;
        $_SESSION['error_msg'] = $_SESSION['error_msg'] . "</br> ইউজার আইডি প্রবেশ করুন , ";
    }
    if (isset($_POST['pass']) && !empty($_POST['pass'])) {
        $pass = $_POST['pass'];
    } else {
        $errflag++;
        $_SESSION['error_msg'] = $_SESSION['error_msg'] . " </br> পাসওয়ার্ড প্রবেশ করুন ,";
    }
    $pass = md5($pass);
    if ($errflag == 0) {
        $query = mysql_query("SELECT * FROM user WHERE username='" . $username . "' and pass = '" . $pass . "' and `right_lavel` = '" . $lavel . "'");
        If (mysql_num_rows($query) > 0) {
            $row = mysql_fetch_array($query);
            $_SESSION['id'] = $row['id'];
            header("location:../home.php");
            exit();
        }
         $_SESSION['error_msg'] = "ইউজার আইডি অথবা পাসওয়ার্ডটি ভুল আছে ,";
    }
} else {
    $errflag = 1;
    $err = $_SESSION['error_msg'];
    $_SESSION['error_msg'] = "Technical problem please contuct to admiin ,";
}
header("location:../index.php");
?>
