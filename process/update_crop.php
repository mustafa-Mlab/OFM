<?php

session_start();
include('../config.php');
if (isset($_POST['update_crop'])) {
    $row_id = $_POST['crop'];
    $name = $_POST['name'];
    $update = "UPDATE `ofm`.`crop` SET `name` ='" . $name . "' WHERE `crop`.`id` ='" . $row_id . "'";
    if (!mysql_query($update, $Link)) {
        die('Error: ' . mysql_error());
    }
    echo "1 record updated \n";
}
header("location:../administration.php#update_crop");
?>
