<?php

include '../config.php';
session_start();
if ($_POST['id']) {
    $row_id = $_POST['id'];
    $sql = mysql_query("SELECT * FROM `sheet3` WHERE `id` ='" . $row_id . "'");
    $row = mysql_fetch_array($sql);
    $crop_id = $row['crop'];
    $land = $row['land'];
    $farmers = $row['farmers'];
    $uria = $row['uria'];
    $tsp = $row['tsp'];
    $dmp = $row['dmp'];
    $mop = $row['mop'];
    $mpks = $row['mpks'];
    $jipsam = $row['jipsam'];
    $zinc_salfet = $row['zinc_salfet'];
    $magnesium_salfet = $row['magnesium_salfet'];
    $aluminum_salfet = $row['alluminium_salfet'];
    $boron = $row['boron'];

    $data = $farmers . "," . $land . "," . $uria . "," . $tsp . "," . $dmp . "," . $mop . "," . $mpks . "," . $jipsam . "," . $zinc_salfet . "," . $magnesium_salfet . "," . $aluminum_salfet . "," . $boron . "," . $crop_id;
    echo $data;
}
?>