<?php

session_start();
include '../config.php';
if (isset($_POST['add_block'])) {
    $union = $_POST['union'];
    $name = $_POST['name'];
    $aez = $_POST['aez'];
    $result = mysql_query("SELECT * FROM `block`WHERE name ='" . $name . "' and union_id = '" . $union . "'");
    If (mysql_num_rows($result) == 0) {
        $sql = "INSERT INTO `ofm`.`block` (`name`, `union_id`, `aez`) VALUES ('$name' , '$union' , '$aez')";
        if (!mysql_query($sql, $Link)) {
            die('Error: ' . mysql_error());
        }
        echo "1 record added \n";
    }
}
header("location:../administration.php#add_block");
?>
