<?php
$servername = "localhost";
$username = "id15725184_ktpusername";
$password = "gLj0Rp_O]PVn!Xbh";
$dbname = "id15725184_ktp";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO fridge (Ingredient)
  VALUES ('$_POST[ingredient]')";
  // use exec() because no results are returned
  $conn->exec($sql);
  header('Location: dashboard.php#dashboard');
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?> 