<?php
$hostname  = 'database-1.czjl7yukrwwh.us-east-1.rds.amazonaws.com';
$username = 'admin';
$password='admin1234';
$dbname = 'admin';
$connect =  mysqli_connect($hostname , $username , $password ,$dbname) or die("Error Connecting");
?>
