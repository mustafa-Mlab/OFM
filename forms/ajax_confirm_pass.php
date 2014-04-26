<?php

include '../config.php';
session_start();
if ($_POST['id']) {
    $con = $_POST['id'];
    $pass = $_POST['pass'];
    if ($pass == $con) {
        $res = 1;
    } else
        $res = 0;
    echo $res;
}
?>