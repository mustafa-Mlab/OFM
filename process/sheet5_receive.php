<?php
session_start();
include '../config.php';
?>
<?php

if (isset($_POST['submit'])) {
    $subdist_id = $_POST['subdistrict'];
    $dist_id = $_POST['district'];
    $ecoyear_id = $_POST['ecoyear'];
    $fertilizer = $_POST['fertilizer'];
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
    $dist_id = $_SESSION['dist_id'];
    $subdist_id = $_SESSION['subdist_id'];
    $sql = "INSERT INTO `ofm`.`sheet5` ( `fertilizar`, `july`, `august`, `september`, `october`, `november`, `december`, `january`, `february`, `march`, `april`, `may`, `june`, `district`, `subdistrict`, `ecoyear`) "
            . "                       VALUES ( '$fertilizer' , '$july' , '$august' , '$september' ,'$october' ,'$november' , '$december', '$january' , '$february', '$march' , '$april', '$may' , '$june', '$dist_id', '$subdist_id', '$ecoyear_id' )";
    if (!mysql_query($sql, $Link)) {
        die('Error: ' . mysql_error());
    }
    echo "1 record added \n";
    $updated = 0;
    $sql = mysql_query("SELECT * FORM sheet7 WHERE fertilizer = '" . $fertilizer . "' and ecoyear = '" . $ecoyear_id . "' and district = '" . $dist_id . "'");
    If (mysql_num_rows($sql) > 0) {
        $row = mysql_fetch_array($sql);
        $july += $row['july'];
        $august += $row['august'];
        $september += $row['september'];
        $october += $row['october'];
        $november += $row['november'];
        $december += $row['december'];
        $january += $row['january'];
        $february += $row['february'];
        $march += $row['march'];
        $april += $row['april'];
        $may += $row['may'];
        $june += $row['june'];
        $id += $row['id'];


        $update = "UPDATE `ofm`.`sheet7` SET `july` ='" . $july . "' , august = '" . $august . "', september = '" . $september . "', october = '" . $october . "', november = '" . $november . "', december = '" . $december . "', january = '" . $january . "', february = '" . $february . "', march = '" . $march . "', april = '" . $april . "', may = '" . $may . "', june = '" . $june . "', updated= '" . $updated . "' WHERE `sheet7`.`id` ='" . $id . "'";
        if (!mysql_query($update, $Link)) {
            die('Error: ' . mysql_error());
        }
        echo "1 record updated \n";
    } else {
        $sql = "INSERT INTO `ofm`.`sheet7` ( `fertilizer`, `july`, `august`, `september`, `october`, `november`, `december`, `january`, `february`, `march`, `april`, `may`, `june`, `district`, `updated`, `ecoyear`) "
                . "                       VALUES ( '$fertilizer' , '$july' , '$august' , '$september' ,'$october' ,'$november' , '$december', '$january' , '$february', '$march' , '$april', '$may' , '$june', '$dist_id', '$updated', '$ecoyear_id' )";
        if (!mysql_query($sql, $Link)) {
            die('Error: ' . mysql_error());
        }
        echo "1 record added \n";
    }
}
header("location:../sheet5.php");
?>
