<?php

include '../config.php';
session_start();

$sql = mysql_query("SELECT * FROM ecoyear WHERE enabled = '1'");
$row = mysql_fetch_array($sql);
$_SESSION['ecoyear_id'] = $row['id'];
$_SESSION['ecoyear'] = $row['ecoyear'];
if ($_POST['id']) {
    $dist_id = $_POST['id'];
    $queary = mysql_query("SELECT * FROM `sheet6` WHERE `ecoyear` = '" . $_SESSION['ecoyear_id'] . "' and `district` = '" . $dist_id . "'");
    $disuria = 0;
    $distsp = 0;
    $disdmp = 0;
    $dismop = 0;
    $dismpks = 0;
    $disjipsam = 0;
    $diszinc_salfet = 0;
    $dismagnesium_salfet = 0;
    $disaluminum_salfet = 0;
    $disboron = 0;
    while ($row = mysql_fetch_array($queary)) {
        $disuria += $row['uria'];
        $distsp += $row['tsp'];
        $disdmp +=$row['dmp'];
        $dismop += $row['mop'];
        $dismpks += $row['mpks'];
        $disjipsam += $row['jipsam'];
        $diszinc_salfet += $row['zinc_salfet'];
        $dismagnesium_salfet += $row['magnesium_salfet'];
        $disaluminum_salfet += $row['alluminium_salfet'];
        $disboron += $row['boron'];
    }

    $data = $disuria . "," . $distsp . "," . $disdmp . "," . $dismop . "," . $dismpks . "," . $disjipsam . "," . $diszinc_salfet . "," . $dismagnesium_salfet . "," . $disaluminum_salfet . "," . $disboron;
    echo $data;
}
?>