<?php
session_start();
require("find_classes/database.php");


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
      <ul class="nav navbar-nav">
        <li ><a href="index.php">Home</a></li>
        <li ><a href="about.php">About</a></li>
        <li ><a href="courses.php">Courses</a></li>
        <li class="active"><a href="#">Trainers</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
	  <li><a href="#" data-toggle="modal" data-target="#myModal">
       <span class="glyphicon glyphicon-user"></span> 
	   SignUp</a></li>
	   
	   <li><a href="#" data-toggle="modal" data-target="#myModal1">
        <span class="glyphicon glyphicon-log-in"></span>Login</a></li>
      </ul>
    </div>
  </div>
</nav>
<br/>  
<div class="container">    
<div class="jumbotron">
    <h2>Our Trainers</h2>
	<br> 
    <div class="row">
    <div class="col-sm-3">
      <img src="img/rohit.png" alt="Image">
      <p></h4><label>Dr. Rohit Khokher </label></p></h4>
    </div>
    <div class="col-sm-3"> 
      <img src="img/ashwini.jpg" alt="Image">
      <p></h4><label>Er. Ashwini Kumar</h4></p></label>   
    </div>
    <div class="col-sm-3">
      <img src="img/rk.png" alt="Image">
       <p></h4><label>Er. Rajendra Kumar</label></h4></p>
    </div>
    <div class="col-sm-3"> 
      <img src="img/y.jpg" alt="Image">
       <p></h4><label>Er. Simran Singh</label></p></h4>
    </div>
    
  </div>
   <div class="row">
    <div class="col-sm-3">
      <img src="img/divya.jpg" alt="Image">
      <p></h4><label>Er. Divya sehgal </label></p></h4>
    </div>
    <div class="col-sm-3"> 
      <img src="img/nisha.jpg" alt="Image">
     <p></h4><label>Er. Nisha Bharti</label></p></h4>   
    </div>
    <div class="col-sm-3">
      <img src="img/khushboo.jpg" alt="Image">
      <p></h4><label>Er. Khushboo Garg</label></p></h4>
    </div>
    <div class="col-sm-3"> 
      <img src="img/t.jpg" alt="Image">
      <p></h4><label>Dr. R.K. Chaudhary </label></p></h4>
    </div>
    
  </div>
  
    
  </div>
  
 
  </div>
</div> 

<br>

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


<?php include("modal.php");    ?>
