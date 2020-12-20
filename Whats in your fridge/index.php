<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <!--<div id = "logo"><img src="assets/img/favicon.png" width="55" height="55" ></div>-->
  
  <title>Whats in your Fridge</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
`
  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/favicon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <script src="search.js"></script>
  <!-- =======================================================
  * Template Name: Personal - v2.4.0
  * Template URL: https://bootstrapmade.com/personal-free-resume-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header-tops">
    <div class="container">

      <h1><a href="index.php">Whats in your Fridge?</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->
      <h2><i>Get started by making a list of foods in your fridge</i></h2>

      <form id="f1" name="f1" class="search">
      	<input type="text" id="t1" name="t1" placeholder="Search recipes here..."
      	required="">
      	<input type="button" name="b1" value="SEARCH" form="f1" onclick="getRecipe(document.getElementById('t1').value)">
      </form>

      <br>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="#header">Home</a></li>
          <li><a href="#dashboard">Dashboard</a></li>
          <li><a href="#recipes">Recipes</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav><!-- .nav-menu -->



      

    </div>
  </header><!-- End Header -->

  <!-- ======= About Section ======= -->
  <section id="dashboard" class="dashboard">

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
                     header('Location: index.php#dashboard');
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
            echo "<td><a class='button alert' href='index.php?delete=".$row["ID"]."'>Delete</a></td>";
            echo "</tr>";
        }
     echo "</tbody>";   
     echo "</table>";


    ?>
   

  <?php

    $sth = mysqli_query($connection, "SELECT Ingredient FROM fridge");
    $rows = array();
    while($r = mysqli_fetch_assoc($sth)) {
        $rows[] = $r['Ingredient'];
    }
    $string = json_encode($rows);
    ?>


 

  </section><!-- End About Section -->

  <!-- ======= Recipes Section ======= -->
  <section id="recipes" class="recipes">
    
  <form id="f1" name="f1" class="search">
        <input type="text" name="user" id="mytext">
        <input type="button" name="b1" value="SEARCH" form="mytext" onclick="getRecipe(document.getElementById('mytext').value)">
      </form>

   <script type="text/javascript">
    var rows1 = <?php echo json_encode($rows); ?>;

    var myJSON = JSON.stringify(rows1);

    var parsed = myJSON.replace(/[&\/\\#+()$~%.'":*?<>{}\[\]]/g,'');
    console.log(parsed);

    var ing = JSON.stringify(parsed);
    console.log(ing);

    document.getElementById("mytext").value = parsed;
  </script>

  <div id="results"></div>
    <div id="results1"></div>
  </section><!-- End Resume Section -->


  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>Contact</h2>
        <p>Contact Us</p>
      </div>

      

      <form action="forms/contact.php" method="post" role="form" class="php-email-form mt-4">
        <div class="form-row">
          <div class="col-md-6 form-group">
            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
            <div class="validate"></div>
          </div>
          <div class="col-md-6 form-group">
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
            <div class="validate"></div>
          </div>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
          <div class="validate"></div>
        </div>
        <div class="form-group">
          <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
          <div class="validate"></div>
        </div>
        <div class="mb-3">
          <div class="loading">Loading</div>
          <div class="error-message"></div>
          <div class="sent-message">Your message has been sent. Thank you!</div>
        </div>
        <div class="text-center"><button type="submit">Send Message</button></div>
      </form>

    </div>
  </section><!-- End Contact Section -->

  

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>