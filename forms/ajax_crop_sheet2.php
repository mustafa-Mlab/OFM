<?php

session_start();
include '../config.php';
if ($_POST['id']) {
    $session = $_POST['id'];
    echo '<option selected="selected" >বাছাই করুন </option>';
        $sql = mysql_query("SELECT * FROM `sheet2`WHERE ecoyear ='" . $_SESSION['ecoyear_id'] . "' and season='".$session."'");
        while ($row = mysql_fetch_array($sql)) {
            $crop_id = $row['crop'];
            $query = mysql_query("SELECT * FROM `crop`WHERE id ='" . $crop_id . "'");
            $crop_details = mysql_fetch_array($query);
            $name = $crop_details['name'];
            echo '<option value="' . $crop_id . '">' . $name . '</option>';
        }

}
?>