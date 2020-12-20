<?php

$hostname = "localhost";
$database = "id15725184_ktp";
$username = "id15725184_ktpusername";
$password = "gLj0Rp_O]PVn!Xbh";
$connection = mysqli_connect($hostname, $username, $password, $database);

if (mysqli_connect_errno()) {
printf("Connect failed: %s\n", mysqli_connect_error());
exit();
}
?>