<?php

if (isset($_SESSION['admin'])) {
    $id = $_SESSION['admin'];
    echo $id;
} else
    header("location:admin.php");
?>