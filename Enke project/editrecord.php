<?php
$ID = $_POST['id'];

require "models/database.php";


$stmt = $var_db->prepare('SELECT * FROM tblmydata WHERE Id = :Id');
$stmt->bindParam(':Id', $ID);

$stmt->execute();

$indStmt = $stmt->fetch();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title></title>

 
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  
  <nav class="white" role="navigation">
      <div class="nav-wrapper container">
        <a href="index.php" class="brand-logo"><img src="images/logo.png " height="55" width="60"></a>
        <ul class="right hide-on-med-and-down">
          <li><a href="MyData.php">My Data</a></li>
          <li><a href="createrecord.php">Create Record</a></li>
          
        </ul>
         <ul class="side-nav" id="nav-mobile">
          <li><a href="MyData.php">My Data</a></li>
          <li><a href="createrecord.php">Create Record</a></li>
         
        </ul>
          <a href="#" data-activates="nav-mobile"class="button-collapse black-text"><i class="material-icons">menu</i></a>
      </div>
  </nav>
  <div id="index-banner" class="parallax-container">
    <div class="section">
      <div class="container">
        <h1 class="center header black-text text-lighten-2"></h1>    
      </div>
      </div>
      s
      <div class="parallax">
        <img src="images/images.jpg" alt="oaisngoasn">
      </div>
  </div>

 <div class="row">
    <form method="POST" action="models/update_mydata.php" class="col s12">
  <div class="row">
        <div class="input-field col s12">
          <input name="Id" type="hidden"  value="<?php echo $indStmt['Id'];?>">
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input name="name" type="text" class="validate" value="<?php echo $indStmt['name'];?>">
          <label for="name">Name</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input name="price" type="text" class="validate" value="<?php echo $indStmt['price'];?>">
          <label for="price">Price</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="description" name="description" type="text" class="validate" value="<?php echo $indStmt['description'];?>">
          <label for="description">Description</label>
        </div>
      </div>
      <input type="submit" value="Update"/>
    </form>
  </div>
  <footer class="page-footer orange">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text"></h5>
          <ul>
            <li><a class="grey-text text-lighten-4"></a></li>
            <li><a class="grey-text text-lighten-4"></a></li>
            <li><a class="grey-text text-lighten-4"></a></li>
            <li><a class="grey-text text-lighten-4"></a></li>
            <li><a class="grey-text text-lighten-4"></a></li>
            <li><a class="grey-text text-lighten-4"></a></li>
            <li><a class="grey-text text-lighten-4"></a></li>
          </ul>

        </div>
        <div class="col l3 s12">
          <h5 class="white-text"></h5>
          <ul>
            <li><a class="white-text" href="#!"></a></li>
            <li><a class="white-text" href="#!"></a></li>
            <li><a class="white-text" href="#!"></a></li>
            <li><a class="white-text" href="#!"></a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text"></h5>
          <ul>
            <li><a class="white-text" href="#!"></a></li>
            <li><a class="white-text" href="#!"></a></li><br />
            <li><a class="white-text" href="#!"></a></li>
            <li><a class="white-text" href="#!"></a><br /></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="brown-text text-black">Meissa Bayo</a>
      </div>
    </div>
  </footer>


  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  </body>
</html>
