<?php
$hostname  = 'database-1.cfy92zjapvo5.us-east-1.rds.amazonaws.com';
$username = 'admin';
$password='admin123';
$dbname = 'jahnavi';
$connect =  mysqli_connect($hostname , $username , $password ,$dbname) or die("Error Connecting");
?>
