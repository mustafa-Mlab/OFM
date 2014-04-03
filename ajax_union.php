<?php
include './config.php';
if ($_POST['id']) {
    $subdist_id = $_POST['id'];
//    echo $subdist_id;
    $sql = mysql_query("SELECT * FROM `union`");

    while ($row = mysql_fetch_array($sql)) {
        if ($subdist_id ==$row['subdist_id']) {
            $id = $row['id'];
            $name = $row['name'];
            echo '<option value="' . $id . '">' . $name . '</option>';
        }
    }
}
?>