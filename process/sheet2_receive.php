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
    if (!empty($_POST['boron'])) {
        $boron = $_POST['boron'];
    } else {
        $errflag++;
        $_SESSION['error_msg'] = $_SESSION['error_msg'] . "</br> " . " Enter boron ammount ";
    }
    if (!empty($_POST['aluminum_salfet'])) {
        $aluminum_salfet = $_POST['aluminum_salfet'];
    } else {
        $errflag++;
        $_SESSION['error_msg'] = $_SESSION['error_msg'] . "</br> " . " Enter aluminum salfet ammount ";
    }
    if (!empty($_POST['magnesium_salfet'])) {
        $magnesium_salfet = $_POST['magnesium_salfet'];
    } else {
        $errflag++;
        $_SESSION['error_msg'] = $_SESSION['error_msg'] . "</br> " . " Enter magnesium salfet Ammount ";
    }
    if (!empty($_POST['zinc_salfet'])) {
        $zinc_salfet = $_POST['zinc_salfet'];
    } else {
        $errflag++;
        $_SESSION['error_msg'] = $_SESSION['error_msg'] . "</br> " . " Enter zinc salfet Ammount ";
    }
    if (!empty($_POST['jipsam'])) {
        $jipsam = $_POST['jipsam'];
    } else {
        $errflag++;
        $_SESSION['error_msg'] = $_SESSION['error_msg'] . "</br> " . " Enter jipsam ammount ";
    }
    if (!empty($_POST['mpks'])) {
        $mpks = $_POST['mpks'];
    } else {
        $errflag++;
        $_SESSION['error_msg'] = $_SESSION['error_msg'] . "</br> " . " Enter mpks Ammount ";
    }
    if (!empty($_POST['mop'])) {
        $mop = $_POST['mop'];
    } else {
        $errflag++;
        $_SESSION['error_msg'] = $_SESSION['error_msg'] . "</br> " . " Enter MOP ammount ";
    }
    if (!empty($_POST['dmp'])) {
        $dmp = $_POST['dmp'];
    } else {
        $errflag++;
        $_SESSION['error_msg'] = $_SESSION['error_msg'] . "</br> " . " Enter DMP Ammount ";
    }
    if (!empty($_POST['tsp'])) {
        $tsp = $_POST['tsp'];
    } else {
        $errflag++;
        $_SESSION['error_msg'] = $_SESSION['error_msg'] . "</br> " . " Enter TSP ammount ";
    }
    if (!empty($_POST['uria'])) {
        $uria = $_POST['uria'];
    } else {
        $errflag++;
        $_SESSION['error_msg'] = $_SESSION['error_msg'] . "</br> " . " Enter URIA ammount ";
    }
    $numbers = $_POST['numbers'];
    $land = $_POST['land'];
    $district = $_POST['district'];
    $subdistrict = $_POST['subdistrict'];
    $union = $_POST['union'];
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
    $sql = "INSERT INTO `ofm`.`sheet2` (`season`, `crop`, `numbers`, `land`, `submitting_date`, `aez`, `district`, `subdistrict`, `union_id`, `block`, `ecoyear`, `boron`, `alluminium_salfet`, `magnesium_salfet`, `zinc_salfet`, `jipsam`, `mpks`, `dmp`, `tsp`, `uria`) "
            . "                       VALUES ('$season' , '$crop' , '$numbers' , '$land' ,         '$date' ,        '$aez' , '$district' , '$subdistrict' , '$union ', '$block' , '$ecoyear_id' , '$boron', '$aluminum_salfet' , '$magnesium_salfet', '$zinc_salfet' , '$jipsam', '$mpks', '$dmp', '$tsp', '$uria')";
    if (!mysql_query($sql, $Link)) {
        die('Error: ' . mysql_error());
    }
    echo "1 record added \n";
}
header("location:../sheet2.php");
?>