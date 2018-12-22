<?php
$dbhost	= 'localhost';
$dbusn	= 'root';
$dbpass	= '';
$dbname	= 'elibrary';
$dbconn	= mysql_connect($host,$dbusn,$dbpass);
$dbopen	= mysql_select_db($dbname,$dbconn);

$connect = new mysqli($dbhost, $dbusn, $dbpass, $dbname);
?>