<?php

session_start();
include '../config.php';
?>
<?php

$errflag = 0;
if (isset($_POST['submit'])) {
    if (!empty($_POST['season'])) {
        $season = $_POST['season'];
    } else {
        $errflag++;
        $_SESSION['error_msg'] = $_SESSION['error_msg'] . "</br> " . " Select Season .";
    }
    if (!empty($_POST['crop'])) {
        $crop = $_POST['crop'];
    } else {
        $errflag++;
        $_SESSION['error_msg'] = $_SESSION['error_msg'] . "</br> " . " Select Crop ";
    }

    if (!empty($_POST['aez'])) {
        $aez = $_POST['aez'];
    } else {
        $errflag++;
        $_SESSION['error_msg'] = $_SESSION['error_msg'] . "</br> " . " Enter AEZ code ";
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
    $union = $_POST['union'];
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
    $sql = "INSERT INTO `ofm`.`sheet3` (`season`, `crop`, `farmers`, `land`, `submitting_date`, `aez`, `district`, `subdistrict`, `union_id`, `ecoyear`, `boron`, `alluminium_salfet`, `magnesium_salfet`, `zinc_salfet`, `jipsam`, `mpks`, `dmp`, `tsp`, `uria`) "
            . "                       VALUES ('$season' , '$crop' , '$farmers' , '$land' ,         '$date' ,        '$aez' , '$district' , '$subdistrict' , '$union ' , '$ecoyear_id' , '$boron', '$aluminum_salfet' , '$magnesium_salfet', '$zinc_salfet' , '$jipsam', '$mpks', '$dmp', '$tsp', '$uria')";
    if (!mysql_query($sql, $Link)) {
        die('Error: ' . mysql_error());
    }
    echo "1 record added \n";
}
header("location:../sheet3.php");
?>