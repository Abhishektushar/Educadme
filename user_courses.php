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

<br/>  
<div class="container">    
<div class="jumbotron">
    <h3>Our Courses</h3> 
    <div class="row">
    <div class="col-sm-3">
	<a href="artificial.php">
      <img src="img/new/artificial_intelligence.jpg" alt="Image">
      <label><p><h4> ENGINEERING | ARTFICIAL INTELLIGENCE </h4></p> </label></a>
    </div>
    <div class="col-sm-3">
	<a href="automata.php"> 
      <img src="img/new/automata.jpg" alt="Image">
      <label><p><h4> ENGINEERING | AUTOMATA </h4></p></label></a>
    </div>
    <div class="col-sm-3">
	<a href="cloud computing.php">
      <img src="img/new/cloud1.jpg" alt="Image">
	   
      <label><p><h4> ENGINEERING | CLOUD COMPUTING </h4></p></label></a>
    </div>
    <div class="col-sm-3">
	<a href="cyber security.php"> 
      <img src="img/new/security11.jpg" alt="Image">
      <label><p><h4> ENGINEERING | CYBER SECURITY </h4></p></label></a>
    </div>
    
  </div>
  <div class="row">
    <div class="col-sm-3">
	<a href="iot.php">
      <img src="img/new/iot.jpg" alt="Image">
      <label> <p><h4> ENGINEERING | INTERNET OF THINGS </h4></p> </label></a>

    </div>
    <div class="col-sm-3"> 
	<a href="java.php">
      <img src="img/new/java1.jpg" alt="Image">
      <label><p><h4> ENGINEERING | JAVA FOR BEGINNERS </h4></p></label></a>
    </div>
    <div class="col-sm-3">
	<a href="networking.php">
	      <img src="img/new/basics.jpg" alt="Image">
      <label><p><h4> ENGINEERING | NETWORKING BASICS </h4></p></label></a>
    </div>
    <div class="col-sm-3">
	<a href="sql.php"> 
      <img src="img/new/php1.jpg" alt="Image">
      <label><p><h4> ENGINEERING |  PHP WITH MYSQL </h4></p></label></a>
    </div>
    
  </div>
  
    
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