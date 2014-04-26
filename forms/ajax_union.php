<?php

include '../config.php';
if ($_POST['id']) {
    $subdist_id = $_POST['id'];
    $note = "বাছাই করুন";
    echo '<option selected="selected" >' . $note . ' </option>';
    $sql = mysql_query("SELECT * FROM `union`");
    while ($row = mysql_fetch_array($sql)) {
        if ($subdist_id == $row['subdist_id']) {
            $id = $row['id'];
            $name = $row['name'];
            echo '<option value="' . $id . '">' . $name . '</option>';
        }
    }
}
?>