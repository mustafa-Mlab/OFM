<?php

$host = "localhost";
$db_user = "root";
$db_pass = "root";
$db = "ofm";


//$host="localhost";
//$db_user="wbpanel_admin";
//$db_pass="admin";			
//$db="wbpanel_virtutone";

$Link = mysql_connect($host, $db_user, $db_pass);
if (!$Link)
  echo "<br />Can't Connect";
//else echo'connected <br />' ;

$select = mysql_select_db($db);
if (!$select)
  echo "<br />Can't Selected";
//else echo'selected <br />' ;
?>