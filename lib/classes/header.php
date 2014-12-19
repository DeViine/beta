<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DeViine | Lets Save Green</title>
	<base target="_blank" href="http://www.devineonline.net/beta"> <!--Sets the filepath of all pages to begin at this root-->
    <link href="favicon.ico" rel="icon" type="image/x-icon" />
    <link rel="stylesheet" href="src/css/foundation.css" media="screen" />
    <link rel="stylesheet" href="src/css/animate.min.css" />
    <link rel="stylesheet" href="fonts/unitedstates/unitedstatesfont.css" media="screen" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="fonts/dense/stylesheet.css" media="screen" />
        <!-- Styles CSS -->
    <link rel="stylesheet" href="src/css/styles.css" media="screen" />

	<!--Search link Node.js for in-site search indexing-->
    <script type="text/javascript" src="src/js/search_node.js"></script>
    <!--jQuery-->
	<script src="src/js/vendor/jquery.js"></script>
    <!--[if lte IE 9] Then this script is required for the donut graph>
    <script src="http:////cdn.jsdelivr.net/excanvas/r3/excanvas.js"></script>
        <![endif]-->  
    <!-- Firebase -->
    <script src="https://cdn.firebase.com/js/client/2.0.2/firebase.js"></script>  
    <!-- RSVP -->
    <script src="src/js/vendor/rsvp.min.js"></script>
    <!-- GeoFire -->
    <script src="src/js/vendor/geofire.min.js"></script>
    <!-- Custom JS -->
    <script src="src/js/html5Geolocation.js" defer></script>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="src/css/html5Geolocation.css">    
    <!--SLIDER JS-->
    <script src="src/js/vendor/modernizr.js"></script>
  </head>
  <body class="home">
    <!-- Firebase ref -->
    <p style="font-weight: bold;">GeoFire data for this example can be found <a id="firebaseRef" href="#" target="_blank">here</a></p>

    <!-- Message log -->
    <div id="log"></div>
    
    <div class="top"></div>
    
      <header>
        <a href="www/index.php"><img id="logo" src="img/deviine_logo.png"></a>
        <div class="search">
          <input type="search" placeholder="What are you looking for?"><a href="#"><img src="img/searchicon.png"></a>
        </div>
        <div class="mobileheaderbuttons">
          <a href="#"><img src="img/hamburger_button.png"></a>
          <a href="#"><img src="img/search_button.png"></a>
        </div>
      </header>
      <ul class="nav">
        <li class="dispensaries"><a href="templates/dispensaries.php" >Dispensaries</a></li>
        <li class="deals"><a href="templates/deals.php">Deals</a></li>
        <li class="strains"><a href="templates/strains.php">Strains</a></li>
      </ul> 



    <div id="alertmodal" class="reveal-modal" data-reveal>
      <h1>This page contains content that is intended for adults only.</h1>
      <br><h4>You must be 21 years or older to continue.</h4>
      <div class="agebuttons">
        <br><button class="close-reveal-modal over21">Over 21</button>
        <button href="http://google.com" class="close-reveal-modal notover21">Not Over 21</button>
      </div>
      <br><h6>DISCLAIMER: Please be aware that possessing, using, distributing & selling marijuana are all federal crimes and the articles, pages, links, or any other information on this site are NOT intended to assist you in violating federal law nor will they in any way assist you in complying with federal law. The information on this site is intended as a public resource to stay informed as the legalization process of marijuana continues.<h6>
    </div>   
    