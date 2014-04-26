<?php

include '../config.php';
session_start();
if ($_POST['id']) {
    $row_id = $_POST['id'];
    $sql = mysql_query("SELECT * FROM `sheet7` WHERE `id` ='" . $row_id . "'");
    $row = mysql_fetch_array($sql);
    $july = $row['july'];
    $august = $row['august'];
    $september = $row['september'];
    $october = $row['october'];
    $november = $row['november'];
    $december = $row['december'];
    $january = $row['january'];
    $february = $row['february'];
    $march = $row['march'];
    $april = $row['april'];
    $may = $row['may'];
    $june = $row['june'];
    $fertilizer = $row['fertilizer'];

    $data = $fertilizer . "," . $july . "," . $august . "," . $september . "," . $october . "," . $november . "," . $december . "," . $january . "," . $february . "," . $march . "," . $april . "," . $may . "," . $june;
    echo $data;
}
?>