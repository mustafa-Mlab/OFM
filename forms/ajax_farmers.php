<?php

include '../config.php';
session_start();
if ($_POST['id']) {
    $crop = $_POST['id'];
    $season = $_POST['season'];
    $farmer = 0;
    $land = 0;
    if ($session == 1) {
        $sql = mysql_query("SELECT * FROM `sheet1` WHERE `ecoyear` ='" . $_SESSION['ecoyear'] . "' and `crop1`='" . $crop . "'");
        while ($row = mysql_fetch_array($sql)) {
            $land += $row['ammount1'];
            $farmer++;
        }
    } elseif ($season == 2) {
        $sql = mysql_query("SELECT * FROM `sheet1` WHERE `ecoyear` ='" . $_SESSION['ecoyear'] . "' and `crop2`='" . $crop . "'");
        while ($row = mysql_fetch_array($sql)) {
            $land += $row['ammount2'];
            $farmer++;
        }
    } else {
        $sql = mysql_query("SELECT * FROM `sheet1` WHERE `ecoyear` ='" . $_SESSION['ecoyear'] . "' and `crop3`='" . $crop . "'");
        while ($row = mysql_fetch_array($sql)) {
            $land += $row['ammount3'];
            $farmer++;
        }
    }
    $data = $farmer.".".$land;
    printf($data) ;
}
?>
