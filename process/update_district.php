<?php

session_start();
include('../config.php');
if (isset($_POST['update_district'])) {
    $row_id = $_POST['district'];
    $name = $_POST['name'];
    $aez = $_POST['aez'];
    $found = 0;
    $update = "UPDATE `ofm`.`district` SET `name` ='" . $name . "' , aez = '" . $aez . "' WHERE `district`.`id` ='" . $row_id . "'";
    if (!mysql_query($update, $Link)) {
        die('Error: ' . mysql_error());
    }
    echo "1 record updated \n";
}
header("location:../administration.php#update_district");
?>
