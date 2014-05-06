<?php

session_start();
include '../config.php';
?>
<?php

$errflag = 0;
if (isset($_POST['submit'])) {
    $crop_id = $_POST['id'];
    if (!empty($_POST['crop'])) {
        $row_id = $_POST['crop'];
    } else {
        $errflag++;
        $_SESSION['error_msg'] = $_SESSION['error_msg'] . "</br> " . " Select Crop ";
    }
    if (!empty($_POST['boron'])) {
        $boron = $_POST['boron'];
    } else {
        $boron = 0;
    }
    if (!empty($_POST['aluminum_salfet'])) {
        $aluminum_salfet = $_POST['aluminum_salfet'];
    } else {
        $aluminum_salfet = 0;
    }
    if (!empty($_POST['magnesium_salfet'])) {
        $magnesium_salfet = $_POST['magnesium_salfet'];
    } else {
        $magnesium_salfet = 0;
    }
    if (!empty($_POST['zinc_salfet'])) {
        $zinc_salfet = $_POST['zinc_salfet'];
    } else {
        $zinc_salfet = 0;
    }
    if (!empty($_POST['jipsam'])) {
        $jipsam = $_POST['jipsam'];
    } else {
        $jipsam = 0;
    }
    if (!empty($_POST['mpks'])) {
        $mpks = $_POST['mpks'];
    } else {
        $mpks = 0;
    }
    if (!empty($_POST['mop'])) {
        $mop = $_POST['mop'];
    } else {
        $mop = 0;
    }
    if (!empty($_POST['dmp'])) {
        $dmp = $_POST['dmp'];
    } else {
        $dmp = 0;
    }
    if (!empty($_POST['tsp'])) {
        $tsp = $_POST['tsp'];
    } else {
        $tsp = 0;
    }
    if (!empty($_POST['uria'])) {
        $uria = $_POST['uria'];
    } else {
        $uria = 0;
    }
    $farmers = $_POST['numbers'];
    $land = $_POST['land'];
    $district = $_POST['district'];
    $subdistrict = $_POST['subdistrict'];
    $union = $_POST['union_id'];
    $block = $_POST['block'];
    $ecoyear_id = $_POST['ecoyear'];
} else {
    $errflag++;
    $_SESSION['error_msg'] = $_SESSION['error_msg'] . "</br> " . " Techinical problem";
}
?>

<?php

if ($errflag == 0) {
    date_default_timezone_set('Asia/Dhaka');
    $date = date('Y-m-d');
    $updated = 1;
    $update = "UPDATE `ofm`.`sheet2` SET `submitting_date` ='" . $date . "' , boron = '" . $boron . "' , alluminium_salfet= '" . $aluminum_salfet . "'  , magnesium_salfet= '" . $magnesium_salfet . "'  , zinc_salfet= '" . $zinc_salfet . "' , jipsam= '" . $jipsam . "' , mpks= '" . $mpks . "' , dmp= '" . $dmp . "' , mop= '" . $mop . "' , tsp= '" . $tsp . "' , uria= '" . $uria . "' , updated= '" . $updated . "' WHERE `sheet2`.`id` ='" . $row_id . "'";
    if (!mysql_query($update, $Link)) {
        die('Error: ' . mysql_error());
    }
    echo "1 record updated \n";


//    ******** This part is to update sheet 3 database *********
    $updated = 0;
    $sql = "SELECT * FROM `sheet3` WHERE union_id ='" . $union . "' and ecoyear = '" . $ecoyear_id . "' and crop ='" . $crop_id . "'";
    $result = mysql_query($sql);
    If (mysql_num_rows($result) > 0) {
        $row = mysql_fetch_array($result);
        $id = $row['id'];
        $farmers += $row['farmers'];
        $land += $row['land'];
        $boron += $row['boron'];
        $aluminum_salfet += $row['alluminium_salfet'];
        $magnesium_salfet += $row['magnesium_salfet'];
        $zinc_salfet += $row['zinc_salfet'];
        $jipsam += $row['jipsam'];
        $mpks += $row['mpks'];
        $mop+= $row['mop'];
        $dmp+= $row['dmp'];
        $tsp+= $row['tsp'];
        $uria+= $row['uria'];
        $update = "UPDATE `ofm`.`sheet3` SET `farmers` ='" . $farmers . "' , land = '" . $land . "', boron = '" . $boron . "', alluminium_salfet = '" . $aluminum_salfet . "', magnesium_salfet = '" . $magnesium_salfet . "', zinc_salfet = '" . $zinc_salfet . "', jipsam = '" . $jipsam . "', mpks = '" . $mpks . "', mop = '" . $mop . "', dmp = '" . $dmp . "', tsp = '" . $tsp . "', uria = '" . $uria . "', updated= '" . $updated . "' WHERE `sheet3`.`id` ='" . $id . "'";
        if (!mysql_query($update, $Link)) {
            die('Error: ' . mysql_error());
        }
        echo "1 record updated \n";
    } else {
        $sql = "INSERT INTO `ofm`.`sheet3` ( `crop`, `farmers`, `land`, `district`, `subdistrict`, `union_id`, `ecoyear` , `updated`, `boron`, `alluminium_salfet`, `magnesium_salfet`, `zinc_salfet`, `jipsam`, `mpks`, `mop`, `dmp`, `tsp`, `uria`) "
                . "                       VALUES ( '$crop_id' , '$farmers' , '$land' , '$district' , '$subdistrict' , '$union'  ,'$ecoyear_id' ,'$updated' , '$boron', '$aluminum_salfet' , '$magnesium_salfet', '$zinc_salfet' , '$jipsam', '$mpks' , '$mop', '$dmp', '$tsp', '$uria'  )";
        if (!mysql_query($sql, $Link)) {
            die('Error: ' . mysql_error());
        }
        echo "1 record added \n";
    }
}
header("location:../sheet2.php");
?>