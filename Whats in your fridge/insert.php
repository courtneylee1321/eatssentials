 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ingredients";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO fridge (Ingredient)
  VALUES ('$_POST[ingredient]')";
  // use exec() because no results are returned
  $conn->exec($sql);
  header('Location: index.php#dashboard');
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?> 