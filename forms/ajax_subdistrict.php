<?php
include '../config.php';
if ($_POST['id']) {
    $dist_id = $_POST['id'];
    echo '<option value=0 > বাছাই করুন </option>';
    $sql = mysql_query("select * from subdistrict");

    while ($row = mysql_fetch_array($sql)) {
        if ($dist_id ==$row['dist_id']) {
            $id = $row['id'];
            $name = $row['name'];
            echo '<option value="' . $id . '">' . $name . '</option>';
        }
    }
}
?>