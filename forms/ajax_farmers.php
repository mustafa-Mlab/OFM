<?php

include '../config.php';
session_start();
if ($_POST['id']) {
    $row_id = $_POST['id'];
    $farmers = 0;
    $land = 0;
    $sql = mysql_query("SELECT * FROM `sheet2` WHERE `id` ='" . $row_id . "'");
    $row = mysql_fetch_array($sql);
    $land = $row['land'];
    $crop = $row['crop'];
    $farmers = $row['farmers'];
    $data = $farmers . "," . $land . "," . $crop;
    echo $data;
}
?>