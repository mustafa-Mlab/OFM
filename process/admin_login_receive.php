<?php

session_start();
include '../config.php';
?>
<?php

$errflag = 0;
if (isset($_POST['submit'])) {
if (!empty($_POST['username'])) {
$uname = $_POST['username'];
} else {
$errflag++;
$_SESSION['error_msg'] = $_SESSION['error_msg'] . "</br>" . "Enter Username ";
}
if (!empty($_POST['pass'])) {
$pass = $_POST['pass'];
} else {
$errflag++;
$_SESSION['error_msg'] = $_SESSION['error_msg'] . "</br>" . "Enter password ";
}
} else {
$errflag = 10;
$_SESSION['error_msg'] = $_SESSION['error_msg'] . "</br>" . "technical problem please contuct to developer";
}
?>
<?php

if ($errflag == 0) {
$query = mysql_query("SELECT * FROM `admin` WHERE `username` ='" . $uname . "' and `pass` = '" . $pass . "' ");
If (mysql_num_rows($query) > 0) {
$row = mysql_fetch_array($query);
$_SESSION['admin'] = $row['id'];
header("location:../administration.php");
exit();
}else{
    $_SESSION['error_msg'] = "ইউজার আইডি অথবা পাসওয়ার্ডটি ভুল আছে ,";
}
}    
header("location:../admin.php");
?>