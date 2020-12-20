<!--Displays what the user checked from the survey form -->
<?php 
foreach($_POST['survey'] as $value)
    {
        echo 'Checked: '.$value ;
        echo nl2br ( "\n ");

    }

 ?>
