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
    <h1>Networking Fundamentals Course</h1>      
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
        <img src="img/new/Network.png" alt="Image">
        <div class="carousel-caption">
          <h3>Cyber Crime</h3>
          
        </div>      
      </div>

      <div class="item">
        <img src="img/new/network2.jpg" alt="Image">
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
</div>
  <br>
<div class="container">
  <div class="jumbotron">
    <h1>Reqirements</h1> 
    <br><p><strong>></strong> There are no specific prerequisites as the course covers all the topics in detail.  </p> </br>
	<p> <strong>></strong> Basic understanding of computers (connect to the Internet) </p> </br>
  
   
   
  </div>
  
  <div class="container">
  <div class="jumbotron">
    <h1>Description</h1> 
    <br><p>***** YOU GET ACCESS TO BOTH MY ICND1 AND ICND2 COURSES WITH YOUR PURCHASE! ****** </p> </br>
	<p>>>> As part of your purchase of my Network Fundamentals course, you will get FREE access to both my CCENT / ICND1 and CCNA ICND2 courses = 55 hours of training! These courses will help you be fully prepared for the CCNA 200-125 exam, or CCENT 100-105 exam, or ICND2 200-105 exam! <<< </p> </br>
   <p> Welcome to the Complete Network Fundamentals Course! In this course, you will learn the technologies that keep the world as you know today connected and running. </p> </br>
   <p> Networks are all around us and you are using one right now to access this course.</p> </br>
   <p>Imagine for a moment, how different your life would be without access to Facebook, Snapchat, Google, YouTube, Whatsapp or any of the other websites on the Internet? How would you live with no Internet? </p> </br>
   <p>The Internet is extremely important in modern life today and all websites and Internet communication relies on networking. This reliance is only predicted to continue with the growth of the Internet of Things (IoT) in the next few years. </p> </br>
    <p> Content in this course can be used towards your CCNA. Topics such as IP addressing, subnetting and many others can be applied directly to passing your CCNA certification. </p> </br>
	
	<h1>Who is the target audience?</h1>
   <p><strong>></strong> Anyone wanting to learn about networking</p> </br>
   <p><strong>></strong> If you want to start your journey to CCNA</p> </br>
   
   
   
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