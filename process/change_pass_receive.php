<?php

include '../config.php';
session_start();
if (isset($_POST['change_pass'])) {
    $pass = $_POST['pass1'];
    $type = $_POST['type'];
    if ($type === '1') {

        $update = "UPDATE `ofm`.`user` SET `pass` ='" . $pass . "'  WHERE `user`.`id` ='" . $_SESSION['id'] . "'";
        if (!mysql_query($update, $Link)) {
            die('Error: ' . mysql_error());
        }
        echo"1 row updated \n";
    }
}
header("location:../home.php#change_pass");
