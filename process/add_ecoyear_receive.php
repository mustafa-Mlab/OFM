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
    if (!empty($_POST['start'])) {
        $start = $_POST['start'];
    } else {
        $errflag++;
        $_SESSION['error_msg'] = $_SESSION['error_msg'] . "</br> " . " Enter Timeline starting date in proper formet";
    }
    if (!empty($_POST['end'])) {
        $end = $_POST['end'];
    } else {
        $errflag++;
        $_SESSION['error_msg'] = $_SESSION['error_msg'] . "</br> " . " Enter Timeline Ending date in proper formet";
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
        $sql = "INSERT INTO `ofm`.`ecoyear` (`ecoyear`, `submission_start`, `submission_end`) "
                . "                      VALUES ('$year' , '$start' ,  '$end' )";
        if (!mysql_query($sql, $Link)) {
            die('Error: ' . mysql_error());
        }
        echo "1 record added \n";
        
        $news = "নতুন অর্থবছর ".$year."  যুক্ত করা হয়েছে, তথ্য জমাদানের সময় ".$start."  তারিখ থেকে ".$end." তারিখ পর্যন্ত";
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
