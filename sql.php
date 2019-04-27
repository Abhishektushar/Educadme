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
		
      </ul>     </div>
  </div>
</nav>


<div class="jumbotron">
  <div class="container text-center">
    <h1>Php With Mysql For Beginners</h1>      
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
    <br><p><strong>></strong> Some HTML is needed for this course (You can get my free HTML course on that)  </p> </br>
	
  
   
   
  </div>
  
  <div class="container">
  <div class="jumbotron">
    <h1>Description</h1> 
    <h2> <br><p>COURSE UP TO DATE </h2> </p> </br>
	<h3><p> How do machines make decisions? </p> </br>
  <h3><p> One of the biggest PHP Courses in Vidya e-Learning ........ </p> </br></h3>
  <h3><p>Best Rated PHP course on Vidya e-Learning.....</p> </br></h3>
   <h3><p>New lectures ADDED all the time.....  </p> </br></h3>
   <h3><p>BEST Reviewed PHP beginners course for a reason..... </p> </br></h3>
    <h3><p> ------------------------------------------------------------------------------------------------------------- </p> </br></h3>
	 <p>Are you new to PHP or need a refresher? Then this course will help you get all the fundamentals of Procedural PHP, Object Oriented PHP, MYSQLi and ending the course by building a CMS system similar to WordPress, Joomla or Drupal. </p> </br>
	  <p> Knowing PHP has allowed me to make enough money to stay home and make courses like this one for students all over the world. Being a PHP developer can allow anyone to make really good money online and offline, developing dynamic applications. </p> </br>
	   <p>Knowing PHP will allow you to build web applications, websites or Content Management systems, like WordPress, Facebook, Twitter or even Google. </p> </br>
	    <p> There is no limit to what you can do with this knowledge. PHP is one of the most important web programming languages to learn, and knowing it, will give you SUPER POWERS in the web development world and job market place. </p> </br>
		<p>As of the time of this posting, this is the only course available on Udemy touching on this subject matter, so I will gladly take recommendations for more material.  </p> </br>
		<h2><p>Why?</p> </br></h2>
		<p>Because Millions of websites and applications (the majority) use PHP. You can find a job anywhere or even work on your own, online and in places like freelancer or Odesk. You can definitely make a substantial income once you learn it.</p> </br>
		<h2><p>Some of my students reviews for this course and others

Holy cr*********</p> </br></h2>
		<p>Readed some books about PHP but it was such boring that i never finished a book and withhold me from learning, this course helped me out straight.. After seeing a free tut on youtube i subscribed the course and jeez, i don't even need goals to get or stay motivated cause i have the instructor: Edwin Diaz, his way of teaching is friggin awesome (and fun) and easy listening! To be honest its keeping me away from bed xD.. I really really love the course. If i need to describe the course from my personal view, one word: Epic! Really looking forward for the stuff that will be added in the future! Great job and thumbs up! Greetings from a Dutchy</p> </br>
		<h2><p>Best PHP course************</p> </br></h2>
		<p>This course is just awesome. You will learn the basics and then you will jump to making your own CMS. Every little piece of code is described very well, so you exactly know, what you are doing. After finishing this course I was ready to make my own social networking site and that's amazing isn't it? Another great part of this course is its instructor, who helps you with every issue you have in short time. I've have already done many internet courses, but this is definetly the best one.</p> </br>
		<h2><p>The Best Php course made FUN and EASY worth The Money!!! *************</p> </br></h2>
		<p>Hi Edwin You have made 'learning PHP very fun an easy to follow. I got so many ideas that I want to do and had been searching around for 3 years now looking for the right course and lecturer that will help me fulfill my dream. I want to thank you that I have gone through more than half of your online course now and I am still interested to complete it. Thank you for your motivation and kind words. It what keeps me going and I know that once I finish this, I will be able to achieve my goal. I believe that your course is the key to my success in fulfilling my dream. AND the best part is the Lecturer always replies to your questions</p> </br>
		
		
   
   
   
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

