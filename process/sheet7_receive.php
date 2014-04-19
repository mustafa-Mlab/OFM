<?php

include '../config.php';
?>
<?php

if (isset($_POST['submit'])) {
    $fer = $_POST['fer'];
    $dist_id = $_POST['district'];
    $ecoyear_id = $_POST['ecoyear'];
    $id = $_POST['fertilizer'];
    $july = $_POST['july'];
    $august = $_POST['august'];
    $september = $_POST['september'];
    $october = $_POST['october'];
    $november = $_POST['november'];
    $december = $_POST['december'];
    $january = $_POST['january'];
    $february = $_POST['february'];
    $march = $_POST['march'];
    $april = $_POST['april'];
    $may = $_POST['may'];
    $june = $_POST['june'];
    $updated = 1;

    $update = "UPDATE `ofm`.`sheet7` SET `july` ='" . $july . "' , august = '" . $august . "', september = '" . $september . "', october = '" . $october . "', november = '" . $november . "', december = '" . $december . "', january = '" . $january . "', february = '" . $february . "', march = '" . $march . "', april = '" . $april . "', may = '" . $may . "', june = '" . $june . "', updated= '" . $updated . "' WHERE `sheet7`.`id` ='" . $id . "'";
    if (!mysql_query($update, $Link)) {
        die('Error: ' . mysql_error());
    }
    echo "1 record updated \n";
}
header("location:../sheet7.php");
?>
