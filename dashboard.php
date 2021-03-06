<html>

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <!--Display of the website title-->
  <title>Eatssentials</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/favicon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,400;1,700;1,900&display=swap" rel="stylesheet">


  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

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
        
    
    <div class = "col-xl-5 col-lg-5"> 
            
    <a href="index.php" class="mr-auto"><img id = "logo2" src="assets/logo-07.svg" alt="" class="img-fluid mb-3"></a> 
        
        </div>
      
      
       <!-- Navigation menu with 4 tabs -->
      <nav class="nav-menu d-none d-lg-block">
        <ul>
        
          <li><a href="homepage.html">Home</a></li>
          <li><a href="#survey">Survey</a></li>
          <li><a href="#dashboard">Dashboard</a></li>
          <li><a href="#recipes">Recipes</a></li>
          
        </ul>
      </nav><!-- .nav-menu -->
      
    </div>
  </header><!-- End Header -->

  <!-- ======= Dashboard Section ======= -->
  <section id="dashboard" class="dashboard">
      
    <div class = "container dashboard-container"> 
        
        <div class = "row"> 
        
            <div class = "col-7"> 
            
             <p class = "turquoise-text-header mt-5"> Dashboard </p>    
        
      <form action="insert.php" method="post" class = "body-text">
      Enter items into your fridge here: <input type="text" name="ingredient" />
      <input type="submit" class = "ml-3" />
    </form>
            
    <!-- Have data generate here... --> 
                
            
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
   

  <!-- selecting query to get ingredients from the list of items user enters in the dashboard -->
  <?php

    $sth = mysqli_query($connection, "SELECT Ingredient FROM fridge");
    $rows = array();
    while($r = mysqli_fetch_assoc($sth)) {
        $rows[] = $r['Ingredient'];
    }
    $string = json_encode($rows);
    ?>
        
    </div>
        
    </div>
        
    <div class = "row justify-content-end"> 
    <div class = "col-6">
                
    <img id = "fridge-pic" src = "assets/img/fridge%20-01.svg"> 
            
                
      </div>
            
      </div>
            
        
      </div>
    
   
      
 </html>     

<html>
  </section><!-- End Dashboard Section -->

  <!-- ======= Recipes Section ======= -->
  <section id="recipes" class="recipes">
  <script src="search.js"></script>
  <form id="f1" name="f1" class="search">
        <input type="hidden" name="user" id="mytext">
        <!-- Retrieve recipes button -->
        <input type="button" class = "button-turquoise" name="b1" value="Find Recipes" form="mytext" onclick="getRecipe(document.getElementById('mytext').value)">
      </form>

   <script type="text/javascript">
    var rows1 = <?php echo json_encode($rows); ?>;

    
    var myJSON = JSON.stringify(rows1);
    console.log(myJSON);

    // parsing through the script user enters
    var parsed = myJSON.replace(/[&\/\\#+()$~%.'":*?<>{}\[\]]/g,'');
    console.log(parsed);

    var ing = JSON.stringify(parsed);
    console.log(ing);

    document.getElementById("mytext").value = parsed;
    </script>
  
    <!--Card display of the retrieved recipes-->
    <div class ="container dashboard-container">
     
      <div class ="row justify-content-around">  
      
      <div class ="col-3">
          <div class="card" style="width: 18rem;">
              <div id="Results1"></div>
        </div>
      </div>
      
        <div class ="col-3">
          <div class="card" style="width: 18rem;">
              <div id="Results2"></div>
        </div>
      </div>
      
        <div class ="col-3">
          <div class="card" style="width: 18rem;">
              <div id="Results3"></div>
        </div>
        </div>
        </div>
        
        <div class ="row justify-content-around">  
      
      <div class ="col-3">
          <div class="card" style="width: 18rem;">
              <div id="Results4"></div>
        </div>
      </div>
      
        <div class ="col-3">
          <div class="card" style="width: 18rem;">
              <div id="Results5"></div>
        </div>
      </div>
      
        <div class ="col-3">
          <div class="card" style="width: 18rem;">
              <div id="Results6"></div>
        </div>
        </div>
        </div>
      
      <div class ="row justify-content-around"> 
      
      <div class ="col-3">
          <div class="card" style="width: 18rem;">
              <div id="Results7"></div>
        </div>
      </div>
      
        <div class ="col-3">
          <div class="card" style="width: 18rem;">
              <div id="Results8"></div>
        </div>
      </div>
      
        <div class ="col-3">
          <div class="card" style="width: 18rem;">
              <div id="Results9"></div>
        </div>
        </div>
        </div>
  </div>


  </section><!-- End Recipes Section -->


  <!-- ======= Survey Section ======= -->
  <section id="survey" class="survey">
    <div class="container survey-background">

      <div class="section-title">
        <h2 class = "turquiose-text"> Eatssentials Survey</h2>
        <p> Health Survey</p>
        Please check all of the health conditions that apply to you: 
      </div>
        
        <br> 

       <!-- Short survey of a list of health conditions may or may have -->
       <!-- User will check the boxes that apply to them -->
        <form method='post' name='template' id="survey">
        <label for="diabetes" class = "survey-items">Diabetes:</label>
        <select id="diabetes" name="diabetes">
          <option value="0">no</option>    
          <option value="1">yes</option>
          
        </select>
        <br>
        <label for="vitamina" class = "survey-items">Vitamin A:</label>
        <select id="vitamina" name="vitamina">
          <option value="0">no</option>
          <option value="1">yes</option>
        </select>
        <br>
          <label for="calcium" class = "survey-items">Calcium:</label>
        <select id="calcium" name="calcium">
        <option value="0">no</option>
          <option value="1">yes</option>
        </select>
        <br>
          <label for="iron" class = "survey-items">Iron:</label>
        <select id="iron" name="iron">
          <option value="0">no</option>
          <option value="1">yes</option>
        </select>
        <br>
          <label for="cholesterot" class = "survey-items">Cholesterol:</label>
        <select id="cholesterot" name="cholesterot">
            <option value="0">no</option>
            <option value="1">yes</option>
            
        </select>
            
        <br>
        <br> 
        <button class = "btn btn-primary button-turquoise"type="submit" id="save" onclick="storeDiabetes(document.getElementById('diabetes').value), storeVitamina(document.getElementById('vitamina').value), storeCalcium(document.getElementById('calcium').value), storeIron(document.getElementById('iron').value), storeCholesterot(document.getElementById('cholesterot').value)">Save</button>

      </form>
    </div>
  </section>
    
    <!-- End Survey Section -->

  

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
