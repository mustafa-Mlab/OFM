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
   $query = mysql_query("SELECT * FROM admin WHERE username='" . $uname . "'");
    if ($query) {
        while ($row = mysql_fetch_array($query)) {
            if (strcmp($row['pass'], $pass) == 0) {
                $_SESSION['admin'] = $row['id'];
                $found = 1;
            }
        }
    } else {
        $found = 0;
        $_SESSION['error_msg'] = $_SESSION['error_msg'] . "Incorrect Id Password Combination";
    }
    if ($found == 1) {
        echo $_SESSION['admin'];
        header("location:../administration.php");
    }
    else {
    header("location:../admin.php");
}
} else {
    header("location:../admin.php");
}
?>