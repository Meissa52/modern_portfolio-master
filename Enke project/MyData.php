 <!DOCTYPE html>
<html lang="en">
<?php

require "models/database.php";

$stmt = $var_db->prepare('SELECT * FROM tblmydata');

$stmt->execute();

?>
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
      <div class="parallax">
        <img src="images/images.jpg" alt="oaisngoasn">
      </div>
  </div>
  <table>
  <tr>
    <th>Items</th>
    <th>Prices</th>
    <th>Description</th>
    <th>Edit Record</th>\
    <th>Delete Record</th>
  </tr>
  <?php foreach($stmt as $indStmt) : ?>
   <tr>
    <td><?php echo $indStmt['name'];?></td>
    <td><?php echo $indStmt['price'];?></td>
    <td><?php echo $indStmt['description'];?></td>
    <td>
      <form action="editrecord.php" method="POST" id="update">  
        <input type="hidden" name="id" value="<?php echo $indStmt['Id'];  ?>">
        <a class="waves-effect waves-light btn black-text"><input type="Submit" name="update">Edit</a>
      </form>
    </td>
    <td>
       <form action='models/delete_mydata.php' method="POST" id="delete">  
        <input type="hidden" name="id" value="<?php echo $indStmt['Id']; ?>">
        <a class="waves-effect waves-light btn black-text"><input type="Submit" name="Delete">Delete</a>
      </form>
    </td>
  </tr>
  <?php endforeach; ?>   
</table>

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
      Made by <a class="brown-text text-lighten-3">Meissa Bayo</a>
      </div>
    </div>
  </footer>


  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  </body>
</html>
