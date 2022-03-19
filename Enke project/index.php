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
      <div class="parallax">
        <img src="images/images.jpg " alt="oaisngoasn" height="200" width="200">
      </div>
  </div>
  <div class="container">
    <div class="section">
      <div class="row">
        <div class="col s12 m12 l12">
          <div class="icon-block"><h2><i class="material-icons"></i></h2>
            <h5 class="center blue-text">About My Company</h5>
          </div>
        <p>
         This company that I am planning on opening in Senegal West Africa will be an IT company. The company will be based on selling and fixing IT Material. I am planning on having a collaboration with amazon so that I can Buy IT material from them, then they can deliver it to my company in Senegal directly and help youths that have their diploma on IT get a job. Research on IT company that are available right now and gather information from them to help me build my company in the right way. The IT company that I am opening back home will be a big benefit to my country because growing up in Senegal my family use to send my dad or mom money to buy them IT material from Amazon and send it to them, until now they do the same thing my uncle work in the IT department at home he work for the American international school that’s back home. So, I was saying why not open an IT company there and collaborate with Amazon so that they don’t need to order from here and get it send to them they can just order it from there. So, for this company I am building my own website so that they can also have an opportunity to order online and get it deliver to them. This company will also help provide job for young IT people that’s in my country and can’t get a job, and there will be an IT repair team to fix any damage item. In my project I will be discussing more about how I am going to build it and the budget that’s needed to start this company.
        </p>
        <div id="areWeOpen"></div>
          <script type="text/javascript">
      function checkIfOpen() 
      {
        var now = new Date();
        var day = now.getDay();
        var hour = now.getHours();
      
        var otime = 9;
        var ctime = 18;
        var msg = "We open at "+otime+"am";
        var until = "";
        var closed = "We are closed for the day";
      
        if (day >= 2 && day <= 5) 
        {
          ctime = 18, until = "6pm";
          if (hour >= otime && hour <= ctime) {
            msg = "We are open until " + until;
            document.getElementById('areWeOpen').innerHTML = msg;}
          else {
            document.getElementById('areWeOpen').innerHTML = closed;
          }
        } else if (day == 6) {
          ctime = 15, until = "3pm";
          if (hour >= otime && hour <= ctime) {
            msg = "We are open until " + until;
            document.getElementById('areWeOpen').innerHTML = msg;
          } 
          else {
            document.getElementById('areWeOpen').innerHTML = closed;
          }
        } else {
          document.getElementById('areWeOpen').innerHTML = closed;
        }
    }
  </script>
      </div>
      </div>
      </div>
    </div>
    <div class="parallax-container valign-wrapper">
    <div class="section">
      <div class="container">
        <div class="row center">
          <h3></h3>
        </div>
      </div>
    </div>
    <div class="parallax">
      <img src="images/images2.jpg"/>
    </div>
  </div>
  <div class="row">
    <div class="col s12 m4">
   <div class="card">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="images/images3.png" height="200">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">Computers<i class="material-icons right">more_vert</i></span>
      <p><a href="#">This is a link</a></p>
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4">Computers<i class="material-icons right">close</i></span>
      <p>I will be selling veriety of computers in my company. I am looking foward to get them from amazon then have it delivered to my company. I have any type of computers you want. I will be fixing broken computers too in my company we looking foward to delivered item to there buyer and guaranteed the decive for 1 year we here for our client needs.  </p>
    </div>
  </div>
</div>

  <div class="col s12 m4">
   <div class="card">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="images/images4.jpg" height="200">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">phones<i class="material-icons right">more_vert</i></span>
      <p><a href="#">This is a link</a></p>
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4">Phones<i class="material-icons right">close</i></span>
      <p>I will be selling veriety of phone in my company. I am looking foward to get them from amazon then have it delivered to my company. I have any type of phone you want. I will be fixing broken phones too in my company we looking foward to delivered item to there buyer and guaranteed the decive for 1 year we here for our client needs. </p>
    </div>
  </div>
</div>

  <div class="col s12 m4">
   <div class="card">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="images/images5.jpg" height="200">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">Other IT Devises<i class="material-icons right">more_vert</i></span>
      <p><a href="#">This is a link</a></p>
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4">Other IT Devises<i class="material-icons right">close</i></span>
      <p>I will be selling veriety of technology in my company. I am looking foward to get them from amazon then have it delivered to my company. I have any type of electronic you want. I will be fixing broken electronic too in my company we looking foward to delivered item to there buyer and guaranteed the decive for 1 year we here for our client needs. </p>
    </div>
  </div>
</div>
</div>
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
        <form class="form-inline active-pink-4">
          <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Search for a name" aria-label="Search" onkeyup="searchname(this.value)">
          <i class="fa fa-search" aria-hidden="true"></i>
        </form>
        <div id="searchResults"><!--Search Results--></div>
        </div>
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
      Made by <a class="brown-text text-lighten-3">Meissa Bayo</a>
      </div>
    </div>
  </footer>
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  </body>
</html>
