<?php

include './config.php';
?>
<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $sql = "INSERT INTO `ofm`.`fertilizer` ( `name`) "
            . "                       VALUES ( '$name' )";
    if (!mysql_query($sql, $Link)) {
        die('Error: ' . mysql_error());
    }
}
header("location:./test.php")
?>