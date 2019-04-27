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
      <a class="navbar-brand" href="#">EDUCADME</a>    </div>
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
    <h1>Getting Started With Cloud Computing - Level 1</h1>      
    <p></p>
  </div>
</div>



</div>
  <br>
  
<div class="container">
  <div class="jumbotron">
    <h1>Reqirements</h1> 
    <br><p><strong>></strong>  Nothing specific is needed to start the training program  </p> </br>
	<p> <strong>></strong> Just bring a nice coffee... </p> </br>
  
   
   
  </div>
  
  <div class="container">
  <div class="jumbotron">
    <h1>Description</h1> 
    <br><p> Cloud Computing is becoming the mainstream in the IT world as growing amount of companies around the globe are in the process of a digital transforming while using the power of cloud-based services. </p> </br>
	<p> Evolution leading to Revolution � traditional IT already use a variety of virtualization technologies for better utilize their physical IT resources. Moving to private clouds is another step in the data center evolution, where existing infrastructure will be utilized and upgraded to provide cloud-based services. In addition, public cloud services are getting huge market momentum as more and more companies are migrating their applications to 3rd party cloud providers. Public clouds are now leading companies to new business frontiers. </p> </br>
   <p>Basic Skills for Everyone � cloud computing and cloud services is touching almost every corner around us, whether you are a software developer, IT professional, system administrator, IT manager, solution architect, project manager, marketing manager, product manager, sales engineer, security expert, network expert, students entering the IT world and so on. </p> </br>
   <p>Level 1 � we need to start with something so this is the first course in a larger training program (�Getting Started with Cloud Computing�) dedicated to the important subject of cloud computing. The training program is divided into several levels enabling students to start from scratch and grow their knowledge in step by step or maybe select a specific level according to their knowledge and experience.</p> </br>
   <p>Would you like to join the Cloud Computing Revolution? </p> </br>
  
	<h1>Who is the target audience?</h1>
   <p><strong>></strong> IT Professionals</p> </br>
   <p><strong>></strong> Software developers</p> </br>
   <p><strong>></strong> System Administrators</p> </br>
   <p><strong>></strong> Security Professionals</p> </br>
   <p><strong>></strong> Product/Project/Marketing Managers</p> </br>
   <p><strong>></strong> Bachelor of Science Students</p> </br>
   
   
   
   
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