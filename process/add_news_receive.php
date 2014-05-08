<?php

session_start();
include '../config.php';
?>

<?php

$errflag = 0;
if (isset($_POST['add_news'])) {
    if (!empty($_POST['news'])) {
        $news = $_POST['news'];
    } else {
        $errflag++;
        $_SESSION['error_msg'] = $_SESSION['error_msg'] . "</br>Enter Notice first";
    }
    if (!empty($_POST['status'])) {
        $status = $_POST['status'];
    } else
        $status = 1;
}
else {
    $errflag++;
    $_SESSION['error_msg'] = $_SESSION['error_msg'] . "</br>Technical Problem";
}
?>

<?php

if ($errflag == 0) {
    $sql = "INSERT INTO `news` (`news`, `status`) "
            . "                      VALUES ('$news' ,'$status )";
    if (!mysql_query($sql, $Link)) {
        die('Error: ' . mysql_error());
    }
    echo "1 record added \n";
    header("location:../administration.php");
}
header("location:../administration.php");
?>
