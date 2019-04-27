<?php

class database{

public $connect;
    
public function connection()
        {
$this->connect=mysqli_connect("localhost","root","","elearning");        
        }  
		

public function checklogin()
{
if(!isset($_SESSION['registration']))  
    {
echo"<script>location.href='index.php';</script>";    
    }  

}

	public function authentication($email,$pass)
		{
		$this->connection();    
		$res=mysqli_query($this->connect,"SELECT * FROM `registration` WHERE `email`='$email' and`password`='$pass'");
		if(mysqli_num_rows($res) == 1)
		{
		$_SESSION['registration']= $email;                       
		echo"<script>location.href='user.php';</script>";    
         }
	else
		 {
		echo"<script>alert('Username/password is incorrect.');</script>"; 
		
		 }     
				}
				
	public function getname($email)   
					{
			$this->connection();  
			$m=mysqli_query($this->connect,"SELECT `name` FROM `registration` WHERE `email`='$email'"); 
			$fetch=mysqli_fetch_array($m); 
			return $fetch[0];
				}

 public function getcourse()
    {
$this->connection();
 $m=mysqli_query($this->connect,"SELECT `course` FROM `tcourse` "); 
 while($fetch=mysqli_fetch_array($m))
 {
 
 ?><form method="post">

  <tr >
        
        <td><?php   print $fetch[0];    ?></td>
        <td><?php   print $fetch[0];    ?> <input type="hidden" name="add" value="<?php   print $fetch[1];  ?>"></td>
        <td><button type="submit" name="add" class="btn btn-success">ADD</button> </td>
  </tr>
    </form>
 
 
<?php
   }
	
}

 public function availedcourses()
    {
$this->connection();
 $m=mysqli_query($this->connect,"SELECT `course` FROM `tcourse`"); 
 while($fetch=mysqli_fetch_array($m))
 {
 
 ?><form method="post">

  <tr >
        
        <td><?php   print $fetch[0];    ?></td>
        <td><?php   print $fetch[0];    ?> <input type="hidden" name="add" value="<?php   print $fetch[1];  ?>"></td>
        <td><button type="submit"  name="add" class="btn btn-danger">revome</button> </td>
  </tr>
    </form>
 
 
<?php
   }
	
}



public function contact($cname,$cemail,$comments)
{
$this->connection();

mysqli_query($this->connect,"INSERT INTO `contact`(`name`, `email`, `comment`) VALUES ('$cname','$cemail','$comments')");

echo"<script>alert('Comment submitted successfully');</script>"; 


}


		}
	$database= new database();
?>	
						
						