<?php

include '../config.php';
session_start();
$id = $_POST['id'];
$pass = "12345678";
$enpass = md5($pass);
$update = "UPDATE `ofm`.`user` SET `pass` ='" . $enpass . "'  WHERE `user`.`id` ='" . $id . "'";
if (!mysql_query($update, $Link)) {
    die('Error: ' . mysql_error());
}
echo "1";
?>