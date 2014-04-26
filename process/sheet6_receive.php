<?php

session_start();
include '../config.php';
?>
<?php

$_SESSION['error_msg'] = '';
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
    $update = "UPDATE `ofm`.`sheet6` SET `submitting_date` ='" . $date . "' , updated= '" . $updated . "' WHERE `sheet6`.`id` ='" . $row_id . "'";
//    . "' , boron = '" . $boron . "' , alluminium_salfet= '" . $aluminum_salfet . "'  , magnesium_salfet= '" . $magnesium_salfet . "'  , zinc_salfet= '" . $zinc_salfet . "' , jipsam= '" . $jipsam . "' , mpks= '" . $mpks . "' , dmp= '" . $dmp . "' , tsp= '" . $tsp . "' , uria= '" . $uria
    if (!mysql_query($update, $Link)) {
        die('Error: ' . mysql_error());
    }
    echo "1 record updated \n";
}
header("location:../sheet6.php");
?>