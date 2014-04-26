<?php

include '../config.php';
session_start();
if ($_POST['id']) {
    $row_id = $_POST['id'];
    $sql = mysql_query("SELECT * FROM `subdistrict` WHERE `id` ='" . $row_id . "'");
    $row = mysql_fetch_array($sql);
    $name = $row['name'];
    $aez = $row['aez'];
    $data = $name . "-" . $aez;
    echo $data;
}
?>