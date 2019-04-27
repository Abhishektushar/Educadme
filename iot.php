<?php
session_start();
require("find_classes/database.php");
$database->checklogin();

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <title> EDUCADME elearning</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
	body {
      font: 400 15px Lato, sans-serif;
      line-height: 1.8;
      color:#333333;
    }
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
	 footer .glyphicon {
      font-size: 20px;
      margin-bottom: 20px;
      color:#FF0000;
  }
    
  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:200px;
  }

  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }
  }
  </style>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">EDUCADME</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
	   <li ><a href="user_courses.php"> <span class="glyphicon glyphicon-globe"></span>COURSE</a></li>
	 
	  <li><a href="user.php" >
        <span class="glyphicon glyphicon-user"></span> Welcome! <?php  print $database->getname($_SESSION['registration']);     ?></a>
        </li>
	  
	<li><a href="logout.php" >
        <span class="glyphicon glyphicon-log-out"></span> Log out</a>
        </li>
		
      </ul>
    </div>
  </div>
</nav>


<div class="jumbotron">
  <div class="container text-center">
    <h1>Internet of Things </h1>      
    <p></p>
  </div>
</div>



<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="img/new/iot1.jpg" alt="Image">
        <div class="carousel-caption">
          <h3>Cyber Crime</h3>
          
        </div>      
      </div>

      <div class="item">
        <img src="img/new/iot2.png" alt="Image">
        <div class="carousel-caption">
          <h3>Cyber Security</h3>

        </div> 
		
		
		
		
		      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div><br>
<div class="container">
  <div class="jumbotron">
    <h1> Reqirements</h1> 
    <br><p><strong>></strong>It will help if you have some background in electronics and know basic coding principles  </p> </br>
	
    </div>
  
<div class="container">
  <div class="jumbotron">
    <h1>Description</h1> 
    <br><p>Imagine a world of connected "things" (devices, vehicles, buildings) able to talk to a network, internet, to themselves and be able to take actions ? </p> </br>
	<p>Welcome to the IOT(Internet of Things) space, a new revolution, which will have 212 Billion Installed things, 30 Billion autonomously connected things, 3 Million Peta Bytes off Embedded Systems Data by 2020, spanning across all verticals estimated at a value of $8.9 trillion. </p> </br>
   <p>Those are some good reasons to look in this direction, Personally it is a truly unique space, as you get to work on both the hardware and the software side of things, be able to connect to the internet and create spectacular devices and solutions.</p> </br>
   <p>This course is designed to enable "YOU" to create amazing IOT products and solutions from scratch all the way to the market.Learn it by creating 3 IOT devices from scratch for Home Automation, Building Security and Assisted Living use cases!</p> </br>
   <p>The focus in this course it to enable and equip the audience to immediately start building IOT products. We touch all the necessary software, hardware, platform, protocols, everything in between to the point it is required. Additional study material is provided for a deep dive. </p> </br>
   <p>Soon there will be more apples coming out of the garage! imagination will be the only limitation. </p> </br>
   
   </div>
    <br>
    
<div class="container">
  <div class="jumbotron">
    <h1>Key Course Subject Highlight's :</h1> 
	
	 <p><strong>1)</strong>  Understand what is an IOT thing, IOT Ecosystem, big picture, Use cases, layers and communication protocols</p> </br>
   <p><strong>2)</strong>  Learn how to work Arduino UNO, Arduino Nano,Sensors, Displays, Keypads, Relays, Power converters the whole nine yards.</p> </br>
   <p><strong>3)</strong>  Learn how to connect your IOT devices to the internet over Ethernet or Wifi. Learn how to work with Ethernet Shield, Wifi chip ESP8266 and Development kit like NodeMCU.</p> </br>
   <p><strong>4)</strong>Understanding software ecosystem, working with Arduino IDE.</p> </br>
   <p><strong>5)</strong>  Learn how to write code (sketch) for your devices, from basics.</p> </br>
   <p><strong>6)</strong> Understand the different options to Connect your device to a IOT Cloud platfrom, DB's.</p> </br>
   <p><strong>7)</strong>  Learn how to persist data to the cloud platform using an API and HTTP methods.</p> </br>
   <p><strong>8)</strong> Learn how to program triggers in the IOT platform like making a call, send an email, sending a text and more.</p> </br>
   <p><strong>9)</strong> Learn how to use a Mobile APP service to create Android APP's in no time and be able to control your IOT device with it over the internet.</p> </br>
   <p><strong>10)</strong> Learn PCB designing using Fritzing, Casing, Soldering and more.</p> </br>
   <p><strong>11)</strong>  Learn about Manufacturing, Certification, Angels, VC and more.</p> </br>
    
	
    </div>
    <br>
  
 <div class="container">
  <div class="jumbotron">  
   <h1>IOT devices You will Create in the Course :</h1>
   <h3>Product 1 </h3><p>- Smart lights and devices -- Home Automation</p> </br>
    <h3>Product 2</h3><p>- Motion detector with email notification - Building Safety</p> </br>   
	 <h3>Product 3 </h3><p>- Panic Alarm for the Elderly - - Healthcare Industry</p> </br>      
    </div>
    <br>
   
<div class="container">
  <div class="jumbotron">   
	<h1>Who is the target audience?</h1>
   <p><strong>></strong> This course is built keeping in mind all levels of Audience, Anybody who is interested in building IOT products to sell or for professional use, personal use or for college projects can take this course</p> </br>
 
   
   
   
</div>
  </div>
</div><br>
 

<footer class="container-fluid text-center" >
   
  <div class="col-sm-4 text-center">
<h3 >EDUCADME</h3>
<hr>

<h4>Our vision is to partner with the brightest minds  </h4>
<h4> and have courses on every possible topic in</h4>
<h4>multiple languages so the whole world can benefit</h4> 
<h4> from these courses.</h4>
</div>
<div class="col-sm-4 text-center">
 <p>  <a href="#" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
 <summary>Copyright @ EDUCADME</summary> </p>
  </div>
<div class="col-sm-4 text-center">
<h3>CONTACT </h3>
<hr>
<h4>COMPANY Address:-</h4>
<h4>Rajiv Chowk, Block B, Connaught Place, 
   <br> New Delhi, Delhi 110001
</h4>

<h4>email:- info@educadme.edu.in</h4>
<br>
<br>

</div>
 
  
</footer>

</body>
</html>

</body>
</html>