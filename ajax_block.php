<?php
include './config.php';
if ($_POST['id']) {
    $union_id = $_POST['id'];
//    echo $subdist_id;
    $sql = mysql_query("SELECT * FROM `block`");

    while ($row = mysql_fetch_array($sql)) {
        if ($union_id ==$row['union_id']) {
            $id = $row['id'];
            $name = $row['name'];
            echo '<option value="' . $id . '">' . $name . '</option>';
        }
    }
}
?>