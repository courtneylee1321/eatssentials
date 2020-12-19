<html>
	<form action="insert.php" method="post">
	Add Ingredient: <input type="text" name="ingredient" /><br><br>
	<input type="submit" />
</form>
</html>

<?php
require_once('connection.php');

      //delete row on button click
      if(isset($_GET["delete"])){
                $ID = $_GET["delete"];
                if($connection->query("DELETE FROM fridge WHERE ID=$ID")){
                     header('Location: ingredients.php');
                }  
            }  

        $result = mysqli_query($connection, "SELECT * FROM fridge ORDER BY ID");

        echo "<table id='fridge'>
        <thead>
        <tr>
        <th>Ingredient</th>
        <th></th>
        </tr>
        </thead>";



        while($row = mysqli_fetch_array($result))
        {   
            echo "<tbody>";
            echo "<tr>";
            echo "<td>" . $row['Ingredient'] . "</td>";
            echo "<td><a class='button alert' href='ingredients.php?delete=".$row["ID"]."'>Delete</a></td>";
            echo "</tr>";
        }
     echo "</tbody>";   
     echo "</table>";


?>