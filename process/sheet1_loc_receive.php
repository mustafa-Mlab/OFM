<?php

session_start();
require '../config.php';
date_default_timezone_set('Asia/Dhaka');
$date = date('Y-m-d');
 $_SESSION['date'] = $date;
$errflag =0;
if(isset($_POST['submit']))
{
    echo 'hello';
    if(!empty($_POST['district'])){
        $_SESSION['district']= $_POST['district'];
    }else $errflag++;
    if(!empty($_POST['subdistrict'])){
       $_SESSION['subdistrict']= $_POST['subdistrict'];
    }else $errflag++;
    if(!empty($_POST['union'])){
        $_SESSION['union']= $_POST['union'];
    }else $errflag++;
    if(!empty($_POST['block'])){
        $_SESSION['block']= $_POST['block'];
    }else $errflag++;
}
else $errflag++;

if($errflag ==0)
{
    echo 'hello';
header("location:../sheet1.php");
exit();
}
header("location:../home.php");
?>
