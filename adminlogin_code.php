<?php
 include("connect.php");
 
 $admin_username=$_POST["admin_username"];
 $admin_password=$_POST["admin_password"];
 
 $q="select*from admin_login where admin_username='$admin_username' and admin_password='$admin_password'";
 print $q;
 $res=mysqli_query($cn,$q);
 
 if($row=mysqli_fetch_array($res))
 {
	 session_start();
	 $_SESSION["username"]=$email;
	 
	 header("location:admin_home.php");
	 
 }
 else
 {
	 echo "<script>alert('Invalid UserName or Password');window.location.href='admin_login.php';</script>";

 }
 ?>