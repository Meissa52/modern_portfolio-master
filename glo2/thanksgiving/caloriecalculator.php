<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Thanksgiving</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <nav class="orange " role="navigation">
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
  <div class="section no-pad-bot" id="index-banner">
    <div class="body white">
    <div class="container">

                <div class="row">
                   <div class="col s12 m12 l12">
                  <form id="caloriesForm" class="z-depth-3 col s6 offset-s3 m6 offset-m3 l6 offset-l3">
                <div class="row">
     <p>
      <label>
        <input id="choice_1"name="group1" type="radio" value="male" checked />
        <span>male</span>
      </label>
    </p>
   <p>
      <label>
        <input id="choice_1"name="group1" type="radio" value="female" checked />
        <span>female</span>
      </label>
    </p>

      <div class="row">
        <div class="input-field col s6">
          <input id="age" type="text" class="validate">
          <label for="Age">Age</label>
        </div>
         <div class="input-field col s6">
          <input id="weight" type="text" class="validate">
          <label for="weight">Weight (lbs)</label>
        </div>
           </div>
      <div class="row">
         <div class="input-field col s4">
         <input id="feet" type="text" class="validate">
          <label for="feet">Feet</label>
        </div>
         <div class="input-field col s8">
         <input id="inches" type="text" class="validate">
          <label for="inches">Inches</label>
        </div>
      </div>
      <div class="row">
          <div class="input-field col s12">
    <div class="input-field col s12">
    <select id="selectExercise">
      <option value="" disabled selected>Choose your option</option>
      <option value="1">No Exercise</option>
      <option value="2">Moderate Exercise</option>
      <option value="3">Heavy Exercise</option>
    </select>
    <label>Select your exercise</label>
  </div>
      </div>
        <div class="row">
         <div class="center">
             <a id="Calculate" onclick="calcCals();" class="darken-2 waves-effect waves-light btn">Caculate</a>
      
             <a id="clearFields" onclick="clearFields();" class="darken-2 waves-effect waves-light btn">Clear Fields</a>
      </div>
      </div>
      <div class="row">
          <div class="input-field col s12 center" id="calorieIntake"></div>
      </div>
    </form>
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
      <script type="text/javascript" src="js/calorie_count.js"></script>
      <script>
  $(document).ready(function() {
        $('.select').material_select();
    });
  </script>
  </body>
</html>