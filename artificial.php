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
    <h1>Artificial Intelligence </h1>      
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
        <img src="img/new/artficial.jpg" alt="Image">
        <div class="carousel-caption">
          <h3>Visiual Reality</h3>
          
        </div>      
      </div>

      <div class="item">
        <img src="img/new/q.jpg" alt="Image">
        <div class="carousel-caption">
          <h3>Deep Learning</h3>

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
    <br><p> > Know reinforcement learning basics, MDPs, Dynamic Programming, Monte Carlo, TD Learning </p> </br>
	<p> > Calculus and probability at the undergraduate level </p> </br>
   <p> > Experience building machine learning models in Python and Numpy </p> </br>
   <p> > Know how to build a feedforward, convolutional, and recurrent neural network using Theano and Tensorflow </p> </br>
   
   
  </div>
  
  <div class="container">
  <div class="jumbotron">
    <h1>Description</h1> 
    <br><p>This course is all about the application of deep learning and neural networks to reinforcement learning.</p> </br>
	<p>If you�ve taken my first reinforcement learning class, then you know that reinforcement learning is on the bleeding edge of what we can do with AI.</p> </br>
   <p>  Specifically, the combination of deep learning with reinforcement learning has led to AlphaGo beating a world champion in the strategy game Go, it has led to self-driving cars, and it has led to machines that can play video games at a superhuman level. </p> </br>
   <p> Reinforcement learning has been around since the 70s but none of this has been possible until now.</p> </br>
   <p> The world is changing at a very fast pace. The state of California is changing their regulations so that self-driving car companies can test their cars without a human in the car to supervise. </p> </br>
   <p>We�ve seen that reinforcement learning is an entirely different kind of machine learning than supervised and unsupervised learning. </p> </br>
    <p> Supervised and unsupervised machine learning algorithms are for analyzing and making predictions about data, whereas reinforcement learning is about training an agent to interact with an environment and maximize its reward. </p> </br>
   
   
   
   
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