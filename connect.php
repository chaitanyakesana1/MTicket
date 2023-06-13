<?php
$hostname  = 'jahnavi.cpc8fmsxmqfg.us-east-2.rds.amazonaws.com';
$username = 'admin';
$password='admin123';
$dbname = 'jahnavi';
$connect =  mysqli_connect($hostname , $username , $password ,$dbname) or die("Error Connecting");
?>
