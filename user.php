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
	   <li ><a href="user_courses.php" > <span class="glyphicon glyphicon-globe"></span>COURSE</a></li>
	 
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
    <h1>Welcome! <?php  print $database->getname($_SESSION['registration']);  ?><php fetch></h1>      
    <p><strong>Continue with your course....</strong></p>
  </div>
</div>
<div class="container">
  <h2>Your profile</h2>
  
  <div class="card" style="width:400px">
    <img class="card-img-top" src="img/img_avatar1.png" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title"><strong><?php  print $database->getname($_SESSION['registration']);  ?></strong></h4>
      <a href="#mycourse" class="btn btn-primary">See Profile</a>
    </div>
  </div>
  <br>
  

<div id="mycourse" div class="jumbotron">
    <h2 >Add course</h2> 
   <form method="POST">  
   <div class="form-group">
          <label for="sel1" >  <strong>Select courses of your choice</strong></label>
		  <br>
		  <br>
          <div class="container">
          

  <table class="table table-striped">
    <thead>
      <tr>
        <th>COURSE NAME</th>
        <th>COURSE DETAIL</th>
        <th>AVAIL</th>
      </tr>
    </thead>
    
         <tbody style="text-align: left;">
     <?php
      $database->getcourse($_SESSION['registration']);
      ?>
    </tbody>
  </table>  
 
  
</div>

     </div> 

    </form>
      <br><br>

</div><br/>




<div id="container" class="jumbotron">
    <h2>Availed Courses</h2> 
 <table class="table table-striped">
 
    <thead>
      <tr>
        <th>COURSE NAME</th>
        <th>COURSE DETAIL</th>
        <th >REMOVE</th>
      </tr>
    </thead>
    
         <tbody style="text-align: left;">
     <?php
      $database->availedcourses($_SESSION['registration']);
      ?>
    </tbody>
  </table>  
  </div>
</div>
  
</div><br/>
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