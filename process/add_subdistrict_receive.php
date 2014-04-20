<?php

session_start();
include('../config.php');
if (isset($_POST['add_subdistrict'])) {
        $district = $_POST['district'];
        $name = $_POST['name'];
        $aez = $_POST['aez'];
    $result = mysql_query("SELECT * FROM subdistrict WHERE `dist_id` = '".$district."' and `name` ='".$name."'");
    If (mysql_num_rows($result) == 0){
        $sql = "INSERT INTO subdistrict (`name` , `dist_id`, `aez`) VALUES ('$name' , '$district' , '$aez' )";
        if (!mysql_query($sql, $Link)) {
            die('Error: ' . mysql_error());
        }
        echo "1 record added \n";
    } else $_SESSION['error_msg']= "This Subdistrict already exist";
    
}
header("location:../administration.php#add_subdistrict");
?>
