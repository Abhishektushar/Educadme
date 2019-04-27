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
   .jumbotron {
      background-color:#CCCCCC;
      color: #fff;
      padding: 100px 25px;
      font-family: Montserrat, sans-serif;
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
        <li ><a href="trainers.php">Trainers</a></li>
        <li class="active"><a href="contact.php">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#" data-toggle="modal" data-target="#myModal">
       <span class="glyphicon glyphicon-user"></span> SignUp
       </a></li>
        
        <li><a href="#" data-toggle="modal" data-target="#myModal1"><span class="glyphicon glyphicon-log-in"></span> 
        Login</a></li> </ul>
    </div>
  </div>
</nav>
<br/>  

<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
  
 
    <div class="col-sm-5">
      <h4><strong>Contact us and we'll get back to you within 24 hours.</strong></h4>
      <p><span class="glyphicon glyphicon-map-marker"></span> Rajiv Chowk, Block B, Connaught Place, New Delhi, Delhi 110001</p>
      <p><span class="glyphicon glyphicon-phone"></span> +91 9870438030</p>
      <p><span class="glyphicon glyphicon-envelope"></span> info@educadme.edu.in</p>
    </div>
	<form method="POST">
    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="cname" name="cname" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="cemail" name="cemail" placeholder="Email" type="email" required>
        </div>
      <div class="col-sm-12 form-group">
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
     </div></div>
	 
	  <div class="form-group">
        <button type="submit" name="submit" class="btn btn-danger">send</button>
        </div>
    
	</div>
	
  </div>
  </form>
</div>



<br />


<?php
if(isset($_POST["submit"])) 
{    
$cname=$_POST["cname"];
$cemail=$_POST["cemail"];
$comments=$_POST["comments"];

$database->contact($cname,$cemail,$comments);



		      
 }      
?>







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
<?php include("modal.php");    ?>