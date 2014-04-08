<?php

session_start();
include '../config.php';
?>
<?php

$errflag = 0;
if (isset($_POST['submit'])) {
    if (!empty($_POST['name'])) {
        $name = $_POST['name'];
    } else {
        $errflag++;
        $_SESSION['error_msg'] = $_SESSION['error_msg'] . "</br> " . " Enter Farmer's name .";
    }
    if (!empty($_POST['g_name'])) {
        $g_name = $_POST['g_name'];
    } else {
        $errflag++;
        $_SESSION['error_msg'] = $_SESSION['error_msg'] . "</br> " . " Enter gurdian name ";
    }
    if (!empty($_POST['ammount'])) {
        $ammount = $_POST['ammount'];
    } else {
        $errflag++;
        $_SESSION['error_msg'] = $_SESSION['error_msg'] . "</br> " . " Enter ammount of land ";
    }
    if (!empty($_POST['crop1'])) {
        $crop1 = $_POST['crop1'];
    } else {
        $errflag++;
        $_SESSION['error_msg'] = $_SESSION['error_msg'] . "</br> " . " Enter Khorip1 crop ";
    }
    if (!empty($_POST['amm1'])) {
        $amm1 = $_POST['amm1'];
    } else {
        $errflag++;
        $_SESSION['error_msg'] = $_SESSION['error_msg'] . "</br> " . " Enter ammount of khorip1 crop cultivating land ";
    }
    if (!empty($_POST['crop2'])) {
        $crop2 = $_POST['crop2'];
    } else {
        $errflag++;
        $_SESSION['error_msg'] = $_SESSION['error_msg'] . "</br> " . " Enter robi crop  ";
    }
    if (!empty($_POST['amm2'])) {
        $amm2 = $_POST['amm2'];
    } else {
        $errflag++;
        $_SESSION['error_msg'] = $_SESSION['error_msg'] . "</br> " . " Enter ammount of robi cutivating land ";
    }
    if (!empty($_POST['crop3'])) {
        $crop3 = $_POST['crop3'];
    } else {
        $errflag++;
        $_SESSION['error_msg'] = $_SESSION['error_msg'] . "</br> " . " Enter khorip crop  ";
    }
    if (!empty($_POST['amm3'])) {
        $amm3 = $_POST['amm3'];
    } else {
        $errflag++;
        $_SESSION['error_msg'] = $_SESSION['error_msg'] . "</br> " . " Enter ammount of khorip cultivating land  ";
    }
} else {
    $errflag++;
    $_SESSION['error_msg'] = $_SESSION['error_msg'] . "</br> " . " Techinical problem";
}
?>