<?php
session_start();

include('config.php');

$errflag= 0;
$found = 0;

if(isset($_POST['login']))
{
    if(isset($_POST['lavel'])&& !empty($_POST['lavel']))
    {
        $lavel = $_POST['lavel'];
    }
    else {
        $errflag++;
    }
    
    if(isset($_POST['username'])&& !empty($_POST['username']))
    {
        $lavel = $_POST['username'];
    }
    else {
        $errflag++;
    }
    if(isset($_POST['pass'])&& !empty($_POST['pass']))
    {
        $lavel = $_POST['pass'];
    }
    else {
        $errflag++;
    }
}

if($errflag==0)
{
    
}
?>
