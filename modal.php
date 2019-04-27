


<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content" align="left">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Enroll yourself</h4>
      </div>
      <div class="modal-body">
       <form method="POST">
        <div class="form-group">
     <label for="email">Email address:</label>
	 
	 <input type="email" class="form-control" required="" id="email" name="email"  placeholder="email" class="form-control" required="" />
        </div>
        <div class="form-group">
     <label for="password">Password:</label>
   <input type="password" class="form-control" required=""  id="password" name="password"  placeholder="password"  class="form-control"  required=""/>
        </div>
       <div class="form-group">
     <label for="name">Name:</label>
     <input type="text" class="form-control" required=""  id="name" name="name"  placeholder="Name in CAPITAL"  class="form-control" required="" />
        </div>
        <div class="form-group">
     <label for="contact">Contact Number:</label>
     <input type="text" class="form-control" maxlength="10" required=""  id="contact" name="contact"  placeholder="Don't use countery code" class="form-control" required="" /> </div>
		
		 <div class="form-group">
          <label for="comment">Address:</label>
          <textarea class="form-control" name="address" id="address"  placeholder="Fill in your address"  class="form-control" required=""></textarea></div>
		
      
      <button type="submit" name="registration" class="btn btn-success">Submit</button></form>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<?php
if(isset($_POST["registration"])) 
{    
$email=$_POST["email"];
$pass=$_POST["password"];
$uname=$_POST["name"];
$contact=$_POST["contact"];
$address=$_POST["address"];

$c=mysqli_connect("localhost","root","","elearning");
mysqli_query($c,"insert into `registration`(`email`,`password`,`name`,`contact`,`address`) 
VALUES('$email','$pass','$uname','$contact','$address')");

		echo"<script>alert('Congrats!you are Registered successfully');</script>"; 
		                       
                                     
                                     }      
?>


<div id="myModal1" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content" align="left">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Sign-In to your account</h4>
      </div>
      <div class="modal-body">
       <form method="POST">
        <div class="form-group">
     <label for="email">Email address:</label>
     <input type="email" class="form-control" required="" id="email" name="email" />
        </div>
        <div class="form-group">
     <label for="password">Password:</label>
     <input type="password" class="form-control" required=""  id="password" name="password" />
        </div>
      
      <button type="submit" name="submitlogin" class="btn btn-success">LogIn</button>
      
       </form>
	   

<?php
if(isset($_POST['submitlogin']))
        {
$email=$_POST['email'];$pass=$_POST['password'];
$database->authentication($email,$pass);                     
        }
?> 


       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>















