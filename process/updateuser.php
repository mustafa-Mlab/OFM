<?php
include '../config.php';
session_start();
if(isset($_POST['update_user'])){
    $id = $_POST['user'];
    $enable = $_POST['status'];
        $update = "UPDATE `ofm`.`user` SET `enabled` ='" . $enable . "'  WHERE `user`.`id` ='" . $id . "'";
    if (!mysql_query($update, $Link)) {
        die('Error: ' . mysql_error());
    }
    echo"1 row updated \n";
}
header("location:../administration.php#update_user");
?>