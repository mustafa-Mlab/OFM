<?php

if (isset($_SESSION['id'])) {
    $id = $_SESSION['id'];
    date_default_timezone_set('Asia/Dhaka');
    $date = date('Y-m-d');
    $query = mysql_query("SELECT * FROM user WHERE id= $id");
    while ($row = mysql_fetch_array($query)) {
        $lavel = $row['right_lavel'];
        $dist_id = $row['district'];
        $subdist_id = $row['subdistrict'];
        $union_id = $row['union_loc'];
    }
    $query = mysql_query("SELECT name FROM district WHERE id='" . $dist_id . "'");
    if ($query) {
        $row = mysql_fetch_array($query);
        $district = $row['name'];
    }

    $query = mysql_query("SELECT name FROM subdistrict WHERE id='" . $subdist_id . "'");
    if ($query) {
        $row = mysql_fetch_array($query);
        $subdistrict = $row['name'];
    }

    $query = mysql_query("SELECT name FROM `union` WHERE `id` ='" . $union_id . "'");
    if ($query) {
        $row = mysql_fetch_array($query);
        $union = $row['name'];
    }
//    echo $id . "  " . $lavel . " " . $district . " " . $subdistrict . " " . $union . " " . $date;
} else {
    $_SESSION['error_msg'] = "You Need to login first to use this application ";
    header("location:index.php");
}
?>