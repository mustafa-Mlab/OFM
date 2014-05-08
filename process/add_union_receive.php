<?php

session_start();
include '../config.php';
if (isset($_POST['add_union'])) {
    $subdistrict = $_POST['subdistrict'];
    $name = $_POST['name'];
    $aez = $_POST['aez'];
    $result = mysql_query("SELECT * FROM `union` WHERE subdist_id ='" . $subdistrict . "' and name = '" . $name . "'");
    If (mysql_num_rows($result) == 0) {
        $sql = "INSERT INTO `union` (`name`, `subdist_id`, `aez`) VALUES ('$name' , '$subdistrict' , '$aez' )";
        if (!mysql_query($sql, $Link)) {
            die('Error: ' . mysql_error());
        }
        echo "1 record added \n";
    } else
        $_SESSION['error_msg'] = "This Union already exist";
}
header("location:../administration.php#add_union");
?>
