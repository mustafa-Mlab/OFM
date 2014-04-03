<?php

session_start();
include '../config.php';
$errflag = 0;
$found = 0;

if (isset($_POST['add_block'])) {
    if (isset($_POST['union']) && !empty($_POST['union'])) {
        $union = $_POST['union'];
    } else {
        $errflag++;
    }
    if (isset($_POST['name']) && !empty($_POST['name'])) {
        $name = $_POST['name'];
    } else {
        $errflag++;
    }
}

if ($errflag == 0) {
    $result = mysql_query("SELECT * FROM `block`");
    while ($row = mysql_fetch_array($result)) {
        if ((strcmp($name, $row['name']) == 0 ) && $union == $row['union_id']) {
            $found++;
            break;
        }
    }
    if ($found)
        echo 'yes';
    else {
        $sql = "INSERT INTO `ofm`.`block` (`name`, `union_id`) VALUES ('$name','$union' )";
        if (!mysql_query($sql, $Link)) {
            die('Error: ' . mysql_error());
        }
        echo "1 record added \n";
    }
}
header("location:../admin.php");
?>
