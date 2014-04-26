<?php

if (isset($_SESSION['id'])) {
    $id = $_SESSION['id'];
    date_default_timezone_set('Asia/Dhaka');
    $date = date('Y-m-d');
    $query = mysql_query("SELECT * FROM user WHERE id= $id");
    while ($row = mysql_fetch_array($query)) {
        $_SESSION['slavel'] = $row['right_lavel'];
        if ($_SESSION['slavel'] < 4) {
            $_SESSION['sdist_id'] = $row['district'];
            $sql = mysql_query("SELECT name FROM district WHERE id='" . $_SESSION['sdist_id'] . "'");
            if ($sql) {
                $data = mysql_fetch_array($query);
                $_SESSION['sdistrict'] = $data['name'];
            }
            if ($_SESSION['slavel'] < 3) {
                $_SESSION['ssubdist_id'] = $row['subdistrict'];
                $sql = mysql_query("SELECT name FROM subdistrict WHERE id='" . $_SESSION['ssubdist_id'] . "'");
                $data = mysql_fetch_array($sql);
                $_SESSION['ssubdistrict'] = $data['name'];
            }
            if ($_SESSION['slavel'] < 2) {
                $_SESSION['sunion_id'] = $row['union_loc'];
                $sql = mysql_query("SELECT name FROM `union` WHERE `id` ='" . $_SESSION['sunion_id'] . "'");
                $data = mysql_fetch_array($sql);
                $union = $data['name'];
            }
        }
    }
} else {
    $_SESSION['error_msg'] = "You Need to login first to use this application ";
    header("location:index.php");
}
?>