<?php

session_start();
include '../config.php';
if ($_POST['id']) {
    $session = $_POST['id'];
//    $rc = 0;
//    $crops[] = array();
    echo '<option selected="selected" >বাছাই করুন </option>';
    if ($session == 1) {
        $sql = mysql_query("SELECT * FROM `sheet1`WHERE ecoyear ='" . $_SESSION['ecoyear_id'] . "'");
        while ($row = mysql_fetch_array($sql)) {
//            $found = 0;
            $crop_id = $row['crop1'];
//            for ($x = 0; $x < $rc; $x++) {
//                if(crops[$x] == $crop_id) 
//                    found++;
//            }
            $query = mysql_query("SELECT * FROM `crop`WHERE id ='" . $crop_id . "'");
            $crop_details = mysql_fetch_array($query);
            $name = $crop_details['name'];
            echo '<option value="' . $crop_id . '">' . $name . '</option>';
        }
    } else if ($session == 2) {
        $sql = mysql_query("SELECT crop2 FROM `sheet1`WHERE ecoyear ='" . $_SESSION['ecoyear_id'] . "'");
        while ($row = mysql_fetch_array($sql)) {
            $crop_id = $row['crop2'];
            $query = mysql_query("SELECT * FROM `crop`WHERE id ='" . $crop_id . "'");
            $crop_details = mysql_fetch_array($query);
            $name = $crop_details['name'];
            echo '<option value="' . $crop_id . '">' . $name . '</option>';
        }
    } else {
        $sql = mysql_query("SELECT crop3 FROM `sheet1`WHERE ecoyear ='" . $_SESSION['ecoyear_id'] . "'");
        while ($row = mysql_fetch_array($sql)) {
            $crop_id = $row['crop3'];
            $query = mysql_query("SELECT * FROM `crop`WHERE id ='" . $crop_id . "'");
            $crop_details = mysql_fetch_array($query);
            $name = $crop_details['name'];
            echo '<option value="' . $crop_id . '">' . $name . '</option>';
        }
    }
}
?>