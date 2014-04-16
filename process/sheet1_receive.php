<?php

session_start();
include '../config.php';
?>
<?php

$errflag = 0;
if (isset($_POST['submit'])) {
    if (!empty($_POST['name'])) {
        $name = $_POST['name'];
    } else {
        $errflag++;
        $_SESSION['error_msg'] = $_SESSION['error_msg'] . "</br> " . " Enter Farmer's name .";
    }
    if (!empty($_POST['g_name'])) {
        $g_name = $_POST['g_name'];
    } else {
        $errflag++;
        $_SESSION['error_msg'] = $_SESSION['error_msg'] . "</br> " . " Enter gurdian name ";
    }
    if (!empty($_POST['ammount'])) {
        $land_ammount = $_POST['ammount'];
    } else {
        $errflag++;
        $_SESSION['error_msg'] = $_SESSION['error_msg'] . "</br> " . " Enter ammount of land ";
    }
    if (!empty($_POST['crop1'])) {
        $crop1 = $_POST['crop1'];
    } else {
        $errflag++;
        $_SESSION['error_msg'] = $_SESSION['error_msg'] . "</br> " . " Enter Khorip1 crop ";
    }
    if (!empty($_POST['amm1'])) {
        $amm1 = $_POST['amm1'];
    } else {
        $errflag++;
        $_SESSION['error_msg'] = $_SESSION['error_msg'] . "</br> " . " Enter ammount of khorip1 crop cultivating land ";
    }
    if (!empty($_POST['crop2'])) {
        $crop2 = $_POST['crop2'];
    } else {
        $errflag++;
        $_SESSION['error_msg'] = $_SESSION['error_msg'] . "</br> " . " Enter robi crop  ";
    }
    if (!empty($_POST['amm2'])) {
        $amm2 = $_POST['amm2'];
    } else {
        $errflag++;
        $_SESSION['error_msg'] = $_SESSION['error_msg'] . "</br> " . " Enter ammount of robi cutivating land ";
    }
    if (!empty($_POST['crop3'])) {
        $crop3 = $_POST['crop3'];
    } else {
        $errflag++;
        $_SESSION['error_msg'] = $_SESSION['error_msg'] . "</br> " . " Enter khorip crop  ";
    }
    if (!empty($_POST['amm3'])) {
        $amm3 = $_POST['amm3'];
    } else {
        $errflag++;
        $_SESSION['error_msg'] = $_SESSION['error_msg'] . "</br> " . " Enter ammount of khorip cutivating land ";
    }
    if (!empty($_POST['aez'])) {
        $aez = $_POST['aez'];
    } else {
        $errflag++;
        $_SESSION['error_msg'] = $_SESSION['error_msg'] . "</br> " . " Enter AEZ Numbers  ";
    }
    $dist_id = $_POST['district'];
    $subdist_id = $_POST['subdistrict'];
    $union_id = $_POST['union'];
    $block_id = $_POST['block'];
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
    $sql = "INSERT INTO `ofm`.`sheet1` (`ecoyear`, `submitting_time`, `district`, `subdistrict`, `union_id`, `block`, `aez`, `name`, `g_name`, `land_ammount`, `crop1`, `ammount1`, `crop2`, `ammount2`, `crop3`, `ammount3`) "
            . "                       VALUES ('$ecoyear_id' , '$date' ,       '$dist_id' , '$subdist_id' , '$union_id' , '$block_id' , '$aez' , '$name' , '$g_name ', '$land_ammount' , '$crop1' , '$amm1', '$crop2' , '$amm2', '$crop3' , '$amm3')";
    if (!mysql_query($sql, $Link)) {
        die('Error: ' . mysql_error());
    }
    echo "1 record added \n";
    $farmers = 1;
    $updated = 0;
    $sql = "SELECT * FROM `sheet2`WHERE block ='" . $block_id . "' and ecoyear = '" . $ecoyear_id . "' and crop ='" . $crop1 . "'";
    $result = mysql_query($sql);
    If (mysql_num_rows($result) > 0) {
        while ($row = mysql_fetch_array($result)) {
            $id = $row['id'];
            $farmers = $row['farmers'] + 1;
            $land = $row['land'] + $amm1;
        }
        $update = "UPDATE `ofm`.`sheet2` SET `farmers` ='" . $farmers . "' , land = '" . $land . "' , updated= '".$updated."' WHERE `sheet2`.`id` ='" . $id . "'";
        if (!mysql_query($update, $Link)) {
            die('Error: ' . mysql_error());
        }
        echo "1 record updated \n";
    } else {
        $sql = "INSERT INTO `ofm`.`sheet2` ( `crop`, `farmers`, `land`, `aez`, `district`, `subdistrict`, `union_id`, `block`, `ecoyear`, `updated`) "
                . "                       VALUES ( '$crop1' , '$farmers' , '$amm1' , '$aez' , '$dist_id' , '$subdist_id' , '$union_id' , '$block_id' ,'$ecoyear_id','$updated'  )";
        if (!mysql_query($sql, $Link)) {
            die('Error: ' . mysql_error());
        }
        echo "1 record added \n";
    }
    $sql = "SELECT * FROM `sheet2` WHERE block ='" . $block_id . "' and ecoyear = '" . $ecoyear_id . "' and crop ='" . $crop2 . "'";
    $result = mysql_query($sql);
    If (mysql_num_rows($result) > 0) {
        $row = mysql_fetch_array($result);
        $id = $row['id'];
        $farmers = $row['farmers'] + 1;
        $land = $row['land'] + $amm2;
        $update = "UPDATE `ofm`.`sheet2` SET `farmers` ='" . $farmers . "' , land = '" . $land . "' , updated= '".$updated."' WHERE `sheet2`.`id` ='" . $id . "'";
        if (!mysql_query($update, $Link)) {
            die('Error: ' . mysql_error());
        }
        echo "1 record updated \n";
    } else {
        $sql = "INSERT INTO `ofm`.`sheet2` ( `crop`, `farmers`, `land`, `aez`, `district`, `subdistrict`, `union_id`, `block`, `ecoyear` , `updated`) "
                . "                       VALUES ( '$crop2' , '$farmers' , '$amm2' , '$aez' , '$dist_id' , '$subdist_id' , '$union_id' , '$block_id'  ,'$ecoyear_id' ,'$updated'  )";
        if (!mysql_query($sql, $Link)) {
            die('Error: ' . mysql_error());
        }
        echo "1 record added \n";
    }
    $sql = "SELECT * FROM `sheet2`WHERE block ='" . $block_id . "' and ecoyear = '" . $ecoyear_id . "' and crop ='" . $crop3 . "'";
    $result = mysql_query($sql);
    If (mysql_num_rows($result) > 0) {
        $row = mysql_fetch_array($result);
        $id = $row['id'];
        $farmers = $row['farmers'] + 1;
        $land = $row['land'] + $amm3;
        $update = "UPDATE `ofm`.`sheet2` SET `farmers` ='" . $farmers . "' , land = '" . $land . "' , updated= '".$updated."' WHERE `sheet2`.`id` ='" . $id . "'";
        if (!mysql_query($update, $Link)) {
            die('Error: ' . mysql_error());
        }
        echo "1 record updated \n";
    } else {
        $sql = "INSERT INTO `ofm`.`sheet2` ( `crop`, `farmers`, `land`, `aez`, `district`, `subdistrict`, `union_id`, `block`, `ecoyear`, `updated`) "
                . "                       VALUES ( '$crop3' , '$farmers' , '$amm3' , '$aez' , '$dist_id' , '$subdist_id' , '$union_id' , '$block_id'  ,'$ecoyear_id' ,'$updated'  )";
        if (!mysql_query($sql, $Link)) {
            die('Error: ' . mysql_error());
        }
        echo "1 record added \n";
    }
}
header("location:../sheet1.php");
?>