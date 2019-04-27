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
    <h1>Java For Beginners</h1>      
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
   
		
		
		
		      
   
  <br>
<div class="container">
  <div class="jumbotron">
    <h1>Reqirements</h1> 
    <br><p><strong>></strong> A computer with either Windows, Mac or Linux to install all the free software and tools needed to build your new apps (I provide specific videos on installations for each platform)  </p> </br>
	<p> <strong>></strong> A strong work ethic, willingness to learn, and plenty of excitement about the awesome new programs you�re about to build</p> </br>
	<p> <strong>></strong> A strong work ethic, willingness to learn, and plenty of excitement about the awesome new programs you�re about to build </p> </br>
  
  
   
   
  </div>
  
  <div class="container">
  <div class="jumbotron">
    <h1>Description</h1> 
    <br><p>Want to go from no previous coding experience -- overwhelmed and confused about where to even start -- to advanced Java 8 and Java 9 programmer, able to seamlessly build creative and exciting programs with confidence? </p> </br>
	<p>Whether you want to: </p> </br>
   <p> - become an in-demand Java developer for exciting software companies </p> </br>
   <p>  - go freelance and work from home, setting your own schedule and rates</p> </br>
   <p>- sharpen your core programming skills to reach the advanced level </p> </br>
   <p>- simply bring your own ideas to life with your first profitable program </p> </br>
    <p> ...this complete Java developer course is exactly what you need, and more. (You�ll even get a certification of completion to add to your arsenal) </p> </br>
	
		
	
   
   
   
   
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