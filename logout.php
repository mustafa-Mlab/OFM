<?php

session_start();
unset($_SESSION['id']);
unset($_SESSION['Mem_name']);
unset($_SESSION['Rights']);
unset($_SESSION['page']);
unset($_SESSION['tarp']);
unset($_SESSION['error_msg']);
session_destroy();
header('Refresh:0; url=index.php');
?>
