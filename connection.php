<?php

$hostname = "localhost";
$database = "ingredients";
$username = "root";
$password = "";
$connection = mysqli_connect($hostname, $username, $password, $database);

if (mysqli_connect_errno()) {
printf("Connect failed: %s\n", mysqli_connect_error());
exit();
}
?>