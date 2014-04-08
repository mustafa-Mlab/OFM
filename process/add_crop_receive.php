<?php

session_start();

include('../config.php');

$errflag = 0;
$found = 0;

if (isset($_POST['add_crop'])) {
    if (isset($_POST['name']) && !empty($_POST['name'])) {
        $name = $_POST['name'];
    } else {
        $errflag++;
    }
}

if ($errflag == 0) {
    $found = 0;
    $result = mysql_query("SELECT * FROM crop");
    while ($row = mysql_fetch_array($result)) {
        if (strcmp($name, $row['name']) == 0) {
            $found++;
            break;
        }
    }
    if($found)
    {echo 'yes';
    $_SESSION['error_msg']="Crop already added";
    header("location:../administration.php#add_crop");
    }
    else {
        $sql = "INSERT INTO crop (name) VALUES ('$name')";
        if (!mysql_query($sql, $Link)) {
            die('Error: ' . mysql_error());
        }
        echo "1 record added \n";
    }
}
header("location:../administration.php#add_crop");
?>
