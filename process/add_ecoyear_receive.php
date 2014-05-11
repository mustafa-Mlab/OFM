<?php

session_start();
include '../config.php';
?>
<?php

$errflag = 0;
if (isset($_POST['add_year'])) {
    $year = $_POST['year'];
    $block_st = $_POST['block_st'];
    $block_en = $_POST['block_en'];
    $union_st = $_POST['union_st'];
    $union_en = $_POST['union_en'];
    $subdist_st = $_POST['subdist_st'];
    $subdist_en = $_POST['subdist_en'];
    $dist_st = $_POST['dist_st'];
    $dist_en = $_POST['dist_en'];
} else {
    $errflag++;
    $_SESSION['error_msg'] = $_SESSION['error_msg'] . "</br> " . " Techinical problem";
}
?>

<?php

$enable = 1;
if ($errflag == 0) {
    $query = mysql_query("SELECT * FORM ecoyear WHERE ecoyear = '" . $year . "'");
    If (mysql_num_rows($query) == 0) {
        $_SESSION['error_msg'] = "date already created ";
    } else {
        $sql = "INSERT INTO `ecoyear` (`ecoyear`,`district_s`,`district_e`,`subdistrict_s`,`subdistrict_e`,`union_s`,`union_e`,`block_s`,`block_e`,`enabled`) "
                . "                      VALUES ('$year' , '$dist_st' , '$dist_en' , '$subdist_st' , '$subdist_en' , '$union_st' , '$union_en' , '$block_st' , '$block_en' , '$enable')";
        if (!mysql_query($sql, $Link)) {
            die('Error: ' . mysql_error());
        }
        echo "1 record added \n";

        $news = "নতুন অর্থবছর " . $year . "  যুক্ত করা হয়েছে, তথ্য জমাদানের সময় ";
        $status = 1;
        $sql = "INSERT INTO `news` (`news`, `status`) "
                . "                      VALUES ('$news' ,'$status' )";
        if (!mysql_query($sql, $Link)) {
            die('Error: ' . mysql_error());
        }
        echo "1 record added \n";
        header("location:../administration.php");
    }
}
header("location:../administration.php");
?>
