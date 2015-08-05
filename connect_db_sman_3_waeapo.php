<?php
$hostname = "localhost";
$user_db = "root";//adjust according to your mysql setting
$pass_db = "root"; //adjust according to your mysql setting, i use no password here
$dbName = "sman_3_waeapo";
mysql_connect($hostname, $user_db, $pass_db);
mysql_select_db($dbName)
or die ("Connect Failed !! :".mysql_error());
?>