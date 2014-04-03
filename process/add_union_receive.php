<?php

session_start();
include '../config.php';
$errflag = 0;
$found = 0;

if (isset($_POST['add_union'])) {
    if (isset($_POST['subdistrict']) && !empty($_POST['subdistrict'])) {
        $subdistrict = $_POST['subdistrict'];
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
    $result = mysql_query("SELECT * FROM `union`");
    while ($row = mysql_fetch_array($result)) {
        if ((strcmp($name, $row['name']) == 0 ) && $subdistrict == $row['subdist_id']) {
            $found++;
            break;
        }
    }
    if ($found)
        echo 'yes';
    else {
        $sql = "INSERT INTO `ofm`.`union` (`name`, `subdist_id`) VALUES ('$name','$subdistrict' )";
        if (!mysql_query($sql, $Link)) {
            die('Error: ' . mysql_error());
        }
        echo "1 record added \n";
    }
}
header("location:../admin.php");
?>
