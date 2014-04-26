<?php

session_start();
include('../config.php');
if (isset($_POST['update_block'])) {
    $row_id = $_POST['block'];
    $name = $_POST['name'];
    $aez = $_POST['aez'];
    $update = "UPDATE `ofm`.`block` SET `name` ='" . $name . "' , aez = '" . $aez . "' WHERE `block`.`id` ='" . $row_id . "'";
    if (!mysql_query($update, $Link)) {
        die('Error: ' . mysql_error());
    }
    echo "1 record updated \n";
}
header("location:../administration.php#update_block");
?>
