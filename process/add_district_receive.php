<?php

session_start();
include('../config.php');
if (isset($_POST['add_district'])) {
    $name = $_POST['name'];
    $aez = $_POST['aez'];
    $found = 0;
    $result = mysql_query("SELECT * FROM district WHERE name= '" . $name . "'");
    If (mysql_num_rows($result) == 0) {
        $sql = "INSERT INTO district (`name` , `aez`) VALUES ('$name' , '$aez')";
        if (!mysql_query($sql, $Link)) {
            die('Error: ' . mysql_error());
        }
        echo "1 record added \n";
    } else
        $_SESSION['error_msg'] = "This District already exist";
}
header("location:../administration.php#add_district");
?>
