 <?php
 include("connect.php");
 
 $email=$_POST["email"];
 $password=$_POST["password"];
 
 $q="select * from user_register where user_email='$email' and user_password='$password'";
 print $q;
 $res=mysqli_query($cn,$q);
 
 if($row=mysqli_fetch_array($res))
 {
	 session_start();
	 $_SESSION["user_id"]=$row[0];
	 
	 header("location:rreg_home.php");
	 
 }
 else
 {
	 echo "<script>alert('Invalid UserName or Password');window.location.href='login.php';</script>";

 }
 ?>