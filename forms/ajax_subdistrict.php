<?php

include '../config.php';
if ($_POST['id']) {
    $dist_id = $_POST['id'];
    $note = "বাছাই করুন";
    echo '<option selected="selected" value ="0" >' . $note . ' </option>';
    $sql = mysql_query("SELECT * FROM subdistrict");

    while ($row = mysql_fetch_array($sql)) {
        if ($dist_id == $row['dist_id']) {
            $id = $row['id'];
            $name = $row['name'];
            echo '<option value="' . $id . '">' . $name . '</option>';
        }
    }
}
?>
