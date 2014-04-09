<?php

include './config.php';
session_start();
$_SESSION['ecoyear'] = 4;
    $crop = 1;
    $season = 2;
    $farmer = 0;
    $land = 0;
    if ($season == 1) {
        $sql = mysql_query("SELECT * FROM `sheet1` WHERE `ecoyear` ='" . $_SESSION['ecoyear'] . "'");
        if ($sql) {
            while ($row = mysql_fetch_array($sql)) {
                if ($row['crop1'] == $crop) {
                    $land += $row['ammount1'];
                    $farmer++;
                }
            }
        }else            echo 'ho';
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
    $data = $farmer . "," . $land;
    echo $data;
?>