<!DOCTYPE html>
<html lang="en">
<?php

require "models/database.php";

$stmt = $var_db->prepare('SELECT * FROM tblthanksgiving');

$stmt->execute();

?>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Thanksgiving</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <nav class="orange" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="index.php" class="brand-logo black-text">thanksgiving</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="caloriecalculator.php" class="black-text">Calorie Calculator</a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="caloriecalculator.php" class="black-text">Calorie Calculator</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>
    </div>
  </div>
  <div id="index-banner">
      <div class="container">  
      </div>
        <img class="materialboxed" src="images/images.jpg" alt="oaisngoasn" width="100%">
        <div class="body black">
    	 <div class="container">
    <div class="section">
      <div class="row">
          <?php foreach($stmt as $indStmt) : ?> 
            <div class="col s12 m4 l4">
               <div class="card large orange">
   <div class="card orange">
    <div class="card-image waves-effect waves-block waves-light">
      <img src="<?php echo $indStmt['Picture'];?>">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4"><i class="material-icons right">more_vert</i><?php echo $indStmt['Thanksgivingactivity'];?></span>
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span>
      <p><?php echo $indStmt['Description'];?></p>
    </div>
  </div>
</div>
</div>
  <?php endforeach; ?>
 
      <!--   Icon Section   -->
    <script>
      function searchname(name) {
        if (name.length==0)
        {
          document.getElementById('searchResults').innerHTML = "";
          return;
        }
        else
        {
          var xmlHTTP;
          if (window.XMLHttpRequest)
          {
            xmlHTTP = new XMLHttpRequest();
          }
          else
          {
            xmlHTTP = new ActiveXObject("Microsoft.XMLHTTP");
          }
          xmlHTTP.onreadystatechange = function()
          {
            if (this.readyState == 4 && this.status == 200)
            {
              document.getElementById('searchResults').innerHTML = this.responseText;
            }
          };
          xmlHTTP.open("GET", "models/mydataSearch.php?q=" + name, true);
          xmlHTTP.send();
        }
      }
    </script>
    <div class="row">
        <div class="col">
        <form class="form-inline active-pink-4 orange-text">
          <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Search for a name" aria-label="Search" onkeyup="searchname(this.value)" style="color: orange;">
          <i class="fa fa-search" aria-hidden="true" style="color: orange;"></i>
        </form>
        <div id="searchResults" style="color: orange;"><!--Search Results--></div>
        </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
  <footer class="page-footer orange">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text"></h5>
          <p class="grey-text text-lighten-4"></p>
        </div>
        <div class="col l3 s12">
          <h5 class="black-text">Other thanksgiving websites</h5>
          <ul>
            <li><a class="black-text" href="https://www.history.com/topics/thanksgiving/history-of-thanksgiving">History</a></li>
            <li><a class="black-text" href="http://www.dltk-holidays.com/thanksgiving/index.html">Holiday</a></li>
            <li><a class="black-text" href="http://www.cybraryman.com/thanksgiving.html">Cybraryman</a></li>
            <li><a class="black-text" href="http://www.scholastic.com/scholastic_thanksgiving/">Scholastic</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="black-text" href="">Meissa Bayo</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
