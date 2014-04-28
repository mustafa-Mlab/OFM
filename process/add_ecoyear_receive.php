<?php

session_start();
include '../config.php';
?>
<?php

$errflag = 0;
if (isset($_POST['add_year'])) {
    if (!empty($_POST['year'])) {
        $year = $_POST['year'];
    } else {
        $errflag++;
        $_SESSION['error_msg'] = $_SESSION['error_msg'] . "</br> " . " Enter Economical Year";
    }
} else {
    $errflag++;
    $_SESSION['error_msg'] = $_SESSION['error_msg'] . "</br> " . " Techinical problem";
}
?>

<?php

if ($errflag == 0) {
    $query = mysql_query("SELECT * FORM ecoyear WHERE ecoyear = '" . $year . "'");
    if ($query) {
        $_SESSION['error_msg'] = "date already created ";
    } else {
        $sql = "INSERT INTO `ofm`.`ecoyear` (`ecoyear`) "
                . "                      VALUES ('$year')";
        if (!mysql_query($sql, $Link)) {
            die('Error: ' . mysql_error());
        }
        echo "1 record added \n";

        $news = "নতুন অর্থবছর " . $year . "  যুক্ত করা হয়েছে, তথ্য জমাদানের সময় ";
        $status = 1;
        $sql = "INSERT INTO `ofm`.`news` (`news`, `status`) "
                . "                      VALUES ('$news' ,'$status )";
        if (!mysql_query($sql, $Link)) {
            die('Error: ' . mysql_error());
        }
        echo "1 record added \n";
        header("location:../administration.php");
    }
}
header("location:../administration.php");
?>
