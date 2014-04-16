<?php

include '../config.php';
session_start();
if ($_POST['id']) {
    $row_id = $_POST['id'];
//    $farmers = 0;
//    $land = 0;
//    $uria = 0;
//    $tsp = 0;
//    $dmp = 0;
//    $mop = 0;
//    $mpks = 0;
//    $jipsam = 0;
//    $zinc_salfet = 0;
//    $magnesium_salfet = 0;
//    $aluminum_salfet = 0;
//    $boron = 0;
    $sql = mysql_query("SELECT * FROM `sheet3` WHERE `id` ='" . $row_id . "'");
    $row = mysql_fetch_array($sql);
    $crop_id = $row['crop'];
    $land = $row['land'];
    $farmers =$row['farmers'];
    $uria  = $row['uria'];
    $tsp  =$row['tsp'];
    $dmp  = $row['dmp'];
    $mop =$row['mop'];
    $mpks  = $row['mpks'];
    $jipsam =$row['jipsam'];
    $zinc_salfet  = $row['zinc_salfet'];
    $magnesium_salfet =$row['magnesium_salfet'];
    $aluminum_salfet =$row['alluminium_salfet'];
    $boron  = $row['boron'];

    $data = $farmers . "," . $land . "," . $uria . "," . $tsp . "," . $dmp . "," . $mop . "," . $mpks . "," . $jipsam . "," . $zinc_salfet . "," . $magnesium_salfet . "," . $aluminum_salfet . "," . $boron . "," . $crop_id ;
    echo $data;
}
?>