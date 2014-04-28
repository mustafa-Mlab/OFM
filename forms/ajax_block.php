<?php

include '../config.php';
echo 'block';
if ($_POST['id']) {
    $union_id = $_POST['id'];
    $note = "বাছাই করুন";
    echo '<option selected="selected" value="0" >' . $note . ' </option>';
    $sql = mysql_query("SELECT * FROM `block`");
    while ($row = mysql_fetch_array($sql)) {
        if ($union_id == $row['union_id']) {
            $id = $row['id'];
            $name = $row['name'];
            echo '<option value="' . $id . '">' . $name . '</option>';
        }
    }
}
?>