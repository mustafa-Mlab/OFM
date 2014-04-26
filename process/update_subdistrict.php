<?php

session_start();
include('../config.php');
if (isset($_POST['update_subdistrict'])) {
    $row_id = $_POST['subdistrict'];
    $name = $_POST['name'];
    $aez = $_POST['aez'];
    $update = "UPDATE `ofm`.`subdistrict` SET `name` ='" . $name . "' , aez = '" . $aez . "' WHERE `subdistrict`.`id` ='" . $row_id . "'";
    if (!mysql_query($update, $Link)) {
        die('Error: ' . mysql_error());
    }
    echo "1 record updated \n";
}
header("location:../administration.php#update_subdistrict");
?>
