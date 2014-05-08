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
    $boron = $_POST['boron'];
    $aluminum_salfet = $_POST['aluminum_salfet'];
    $magnesium_salfet = $_POST['magnesium_salfet'];
    $zinc_salfet = $_POST['zinc_salfet'];
    $jipsam = $_POST['jipsam'];
    $mpks = $_POST['mpks'];
    $mop = $_POST['mop'];
    $dmp = $_POST['dmp'];
    $tsp = $_POST['tsp'];
    $uria = $_POST['uria'];
    $farmers = $_POST['numbers'];
    $land = $_POST['land'];
    $district = $_POST['district'];
    $subdistrict = $_POST['subdistrict'];
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
    $update = "UPDATE `sheet4` SET `submitting_date` ='" . $date . "' , updated= '" . $updated . "' WHERE `sheet4`.`id` ='" . $row_id . "'";
//    . "' , boron = '" . $boron . "' , alluminium_salfet= '" . $aluminum_salfet . "'  , magnesium_salfet= '" . $magnesium_salfet . "'  , zinc_salfet= '" . $zinc_salfet . "' , jipsam= '" . $jipsam . "' , mpks= '" . $mpks . "' , dmp= '" . $dmp . "' , tsp= '" . $tsp . "' , uria= '" . $uria
    if (!mysql_query($update, $Link)) {
        die('Error: ' . mysql_error());
    }
    echo "1 record updated \n";


//    ******** This part is to update sheet 3 database *********
    $updated = 0;
    $sql = "SELECT * FROM `sheet6` WHERE district ='" . $district . "' and ecoyear = '" . $ecoyear_id . "' and crop ='" . $crop_id . "'";
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
        $update = "UPDATE `sheet6` SET `farmers` ='" . $farmers . "' , land = '" . $land . "', boron = '" . $boron . "', alluminium_salfet = '" . $aluminum_salfet . "', magnesium_salfet = '" . $magnesium_salfet . "', zinc_salfet = '" . $zinc_salfet . "', jipsam = '" . $jipsam . "', mpks = '" . $mpks . "', mop = '" . $mop . "', dmp = '" . $dmp . "', tsp = '" . $tsp . "', uria = '" . $uria . "', updated= '" . $updated . "' WHERE `sheet6`.`id` ='" . $id . "'";
        if (!mysql_query($update, $Link)) {
            die('Error: ' . mysql_error());
        }
        echo "1 record updated \n";
    } else {
        $sql = "INSERT INTO `sheet6` ( `crop`, `farmers`, `land`, `district`, `ecoyear` , `updated`, `boron`, `alluminium_salfet`, `magnesium_salfet`, `zinc_salfet`, `jipsam`, `mpks`, `mop`, `dmp`, `tsp`, `uria`) "
                . "                       VALUES ( '$crop_id' , '$farmers' , '$land' , '$district' ,'$ecoyear_id' ,'$updated' , '$boron', '$aluminum_salfet' , '$magnesium_salfet', '$zinc_salfet' , '$jipsam', '$mpks' , '$mop', '$dmp', '$tsp', '$uria'  )";
        if (!mysql_query($sql, $Link)) {
            die('Error: ' . mysql_error());
        }
        echo "1 record added \n";
    }
}
header("location:../sheet4.php");
?>