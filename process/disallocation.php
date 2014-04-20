<?php

include '../config.php';
session_start();
$ecoyear_id = $_SESSION['ecoyear_id'];
$h = 100.00;
if (isset($_POST['submit'])) {
    $dist_id = $_POST['district'];
    $uria_r = $_POST['uria'];
    $uria_a = $_POST['all_uria'];
    $uria_p = ($uria_a * $h) / $uria_r;
    $tsp_r = $_POST['tsp'];
    $tsp_a = $_POST['all_tsp'];
    $tsp_p = ($tsp_a * $h) / $tsp_r;
    $dmp_r = $_POST['dmp'];
    $dmp_a = $_POST['all_dmp'];
    $dmp_p = ($dmp_a * $h) / $dmp_r;
    $mop_r = $_POST['mop'];
    $mop_a = $_POST['all_mop'];
    $mop_p = ($mop_a * $h) / $mop_r;
    $mpks_r = $_POST['mpks'];
    $mpks_a = $_POST['all_mpks'];
    $mpks_p = ($mpks_a * $h) / $mpks_r;
    $jipsam_r = $_POST['jipsam'];
    $jipsam_a = $_POST['all_jipsam'];
    $jipsam_p = ($jipsam_a * $h) / $jipsam_r;
    $zs_r = $_POST['zinc_salfet'];
    $zs_a = $_POST['all_zinc_salfet'];
    $zs_p = ($zs_a * $h) / $zs_r;
    $ms_r = $_POST['magnesium_salfet'];
    $ms_a = $_POST['all_magnesium_salfet'];
    $ms_p = ($ms_a * $h) / $ms_r;
    $as_r = $_POST['aluminum_salfet'];
    $as_a = $_POST['all_aluminum_salfet'];
    $as_p = ($as_a * $h) / $as_r;
    $br_r = $_POST['boron'];
    $br_a = $_POST['all_boron'];
    $br_p = ($br_a * $h) / $br_r;
    date_default_timezone_set('Asia/Dhaka');
    $date = date('Y-m-d');
    $sql = "INSERT INTO `ofm`.`district_allocation` (`ecoyear`, `submitting_date`, `district`, `uria_r`, `uria_a`, `tsp_r`, `tsp_a`, `dmp_r`, `dmp_a`, `mop_r`, `mop_a`, `mpks_r`, `mpks_a`, `jipsam_r`, `jipsam_a`, `zs_r`, `zs_a`, `ms_r`, `ms_a`, `as_r`, `as_a`, `br_r`, `br_a`) "
            . "                                      VALUES ('$ecoyear_id' , '$date' ,  '$dist_id' , '$uria_r' , '$uria_a' , '$tsp_r' , '$tsp_a' , '$dmp_r' , '$dmp_a ', '$mop_r' , '$mop_a' , '$mpks_r', '$mpks_a' , '$jipsam_r', '$jipsam_a' , '$zs_r', '$zs_a', '$ms_r', '$ms_a', '$as_r', '$as_a', '$br_r', '$br_a')";
    if (!mysql_query($sql, $Link)) {
        die('Error: ' . mysql_error());
    }
    echo "1 record added \n";
    $enable = 0;
    $update = "UPDATE `ofm`.`ecoyear` SET `enabled` ='" . $enable . "' WHERE `ecoyear`.`id` ='" . $ecoyear_id . "'";
    if (!mysql_query($update, $Link)) {
        die('Error: ' . mysql_error());
    }
    echo "1 record updated \n";
    $sql = "SELECT * FROM `sheet6` WHERE district = '" . $dist_id . "' and ecoyear = '" . $ecoyear_id . "'";
    $result = mysql_query($sql);
    while ($row = mysql_fetch_array($result)) {
        $farmers = $row['farmers'];
        $land = $row['land'];
        $boron = ( $row['boron'] * $br_p) / $h;
        $aluminum_salfet = ($row['alluminium_salfet'] * $as_p) / $h;
        $magnesium_salfet = ($row['magnesium_salfet'] * $ms_p) / $h;
        $zinc_salfet = ($row['zinc_salfet'] * $zs_p) / $h;
        $jipsam = ($row['jipsam']) / $h;
        $mpks = ($row['mpks'] * $mpks_p) / $h;
        $mop = ($row['mop'] * $mop_p) / $h;
        $dmp = ($row['dmp'] * $dmp_p) / $h;
        $tsp = ($row['tsp'] * $tsp_p) / $h;
        $uria = ($row['uria'] * $uria_p) / $h;
        $crop = $row['crop'];
        $sql = "INSERT INTO `ofm`.`sheet6_alloted` ( `crop`, `farmers`, `land`, `district`, `ecoyear` , `boron`, `alluminium_salfet`, `magnesium_salfet`, `zinc_salfet`, `jipsam`, `mpks`, `mop`, `dmp`, `tsp`, `uria`) "
                . "                       VALUES ( '$crop' , '$farmers' , '$land' , '$dist_id' ,'$ecoyear_id' , '$boron', '$aluminum_salfet' , '$magnesium_salfet', '$zinc_salfet' , '$jipsam', '$mpks' , '$mop', '$dmp', '$tsp', '$uria'  )";
        if (!mysql_query($sql, $Link)) {
            die('Error: ' . mysql_error());
        }
        echo "1 record added \n";
    }
    $sql = "SELECT * FROM `sheet4` WHERE district = '" . $dist_id . "' and ecoyear = '" . $ecoyear_id . "'";
    $result = mysql_query($sql);
    while ($row = mysql_fetch_array($result)) {
        $farmers = $row['farmers'];
        $subdistrict = $row['subdistrict'];
        $land = $row['land'];
        $boron = ( $row['boron'] * $br_p) / $h;
        $aluminum_salfet = ($row['alluminium_salfet'] * $as_p) / $h;
        $magnesium_salfet = ($row['magnesium_salfet'] * $ms_p) / $h;
        $zinc_salfet = ($row['zinc_salfet'] * $zs_p) / $h;
        $jipsam = ($row['jipsam']) / $h;
        $mpks = ($row['mpks'] * $mpks_p) / $h;
        $mop = ($row['mop'] * $mop_p) / $h;
        $dmp = ($row['dmp'] * $dmp_p) / $h;
        $tsp = ($row['tsp'] * $tsp_p) / $h;
        $uria = ($row['uria'] * $uria_p) / $h;
        $crop = $row['crop'];
        $sql = "INSERT INTO `ofm`.`sheet4_alloted` ( `crop`, `subdistrict`, `farmers`, `land`, `district`, `ecoyear` , `boron`, `alluminium_salfet`, `magnesium_salfet`, `zinc_salfet`, `jipsam`, `mpks`, `mop`, `dmp`, `tsp`, `uria`) "
                . "                       VALUES ( '$crop' , '$subdistrict', '$farmers' , '$land' , '$dist_id' ,'$ecoyear_id' , '$boron', '$aluminum_salfet' , '$magnesium_salfet', '$zinc_salfet' , '$jipsam', '$mpks' , '$mop', '$dmp', '$tsp', '$uria'  )";
        if (!mysql_query($sql, $Link)) {
            die('Error: ' . mysql_error());
        }
        echo "1 record added \n";
    }
    $sql = "SELECT * FROM `sheet3` WHERE district = '" . $dist_id . "' and ecoyear = '" . $ecoyear_id . "'";
    $result = mysql_query($sql);
    while ($row = mysql_fetch_array($result)) {
        $farmers = $row['farmers'];
        $subdistrict = $row['subdistrict'];
        $union_id = $row['union_id'];
        $land = $row['land'];
        $boron = ( $row['boron'] * $br_p) / $h;
        $aluminum_salfet = ($row['alluminium_salfet'] * $as_p) / $h;
        $magnesium_salfet = ($row['magnesium_salfet'] * $ms_p) / $h;
        $zinc_salfet = ($row['zinc_salfet'] * $zs_p) / $h;
        $jipsam = ($row['jipsam']) / $h;
        $mpks = ($row['mpks'] * $mpks_p) / $h;
        $mop = ($row['mop'] * $mop_p) / $h;
        $dmp = ($row['dmp'] * $dmp_p) / $h;
        $tsp = ($row['tsp'] * $tsp_p) / $h;
        $uria = ($row['uria'] * $uria_p) / $h;
        $crop = $row['crop'];
        $sql = "INSERT INTO `ofm`.`sheet3_alloted` ( `crop`, `subdistrict`, `union_id`, `farmers`, `land`, `district`, `ecoyear` , `boron`, `alluminium_salfet`, `magnesium_salfet`, `zinc_salfet`, `jipsam`, `mpks`, `mop`, `dmp`, `tsp`, `uria`) "
                . "                                 VALUES ( '$crop' , '$subdistrict', '$union_id', '$farmers' , '$land' , '$dist_id' ,'$ecoyear_id' , '$boron', '$aluminum_salfet' , '$magnesium_salfet', '$zinc_salfet' , '$jipsam', '$mpks' , '$mop', '$dmp', '$tsp', '$uria'  )";
        if (!mysql_query($sql, $Link)) {
            die('Error: ' . mysql_error());
        }
        echo "1 record added \n";
    }
    $sql = "SELECT * FROM `sheet2` WHERE district = '" . $dist_id . "' and ecoyear = '" . $ecoyear_id . "'";
    $result = mysql_query($sql);
    while ($row = mysql_fetch_array($result)) {
        $farmers = $row['farmers'];
        $subdistrict = $row['subdistrict'];
        $union_id = $row['union_id'];
        $block = $row['block'];
        $land = $row['land'];
        $boron = ( $row['boron'] * $br_p) / $h;
        $aluminum_salfet = ($row['alluminium_salfet'] * $as_p) / $h;
        $magnesium_salfet = ($row['magnesium_salfet'] * $ms_p) / $h;
        $zinc_salfet = ($row['zinc_salfet'] * $zs_p) / $h;
        $jipsam = ($row['jipsam']) / $h;
        $mpks = ($row['mpks'] * $mpks_p) / $h;
        $mop = ($row['mop'] * $mop_p) / $h;
        $dmp = ($row['dmp'] * $dmp_p) / $h;
        $tsp = ($row['tsp'] * $tsp_p) / $h;
        $uria = ($row['uria'] * $uria_p) / $h;
        $crop = $row['crop'];
        $sql = "INSERT INTO `ofm`.`sheet2_alloted` ( `crop`, `subdistrict`, `union_id`, `block`, `farmers`, `land`, `district`, `ecoyear` , `boron`, `alluminium_salfet`, `magnesium_salfet`, `zinc_salfet`, `jipsam`, `mpks`, `mop`, `dmp`, `tsp`, `uria`) "
                . "                                 VALUES ( '$crop' , '$subdistrict', '$union_id', '$block', '$farmers' , '$land' , '$dist_id' ,'$ecoyear_id' , '$boron', '$aluminum_salfet' , '$magnesium_salfet', '$zinc_salfet' , '$jipsam', '$mpks' , '$mop', '$dmp', '$tsp', '$uria'  )";
        if (!mysql_query($sql, $Link)) {
            die('Error: ' . mysql_error());
        }
        echo "1 record added \n";
    }
}
header("location:../home.php#dis_alloted");
?>