<?php
include("connect.php");

$user_name=$_POST["user_name"];
$user_address=$_POST["user_address"];
$user_city=$_POST["user_city"];
$user_pincode=$_POST["user_pincode"];
$user_contactno=$_POST["user_contactno"];
$user_birthdate=$_POST["user_birthdate"];
$user_email=$_POST["user_email"];
$user_password=$_POST["user_password"];

$q="insert into user_register(user_name,user_address,user_city,user_pincode,user_contactno,user_birthdate,user_email,user_password)values('$user_name','$user_address','$user_city',$user_pincode,'$user_contactno','$user_birthdate','$user_email','$user_password')";
print $q;
mysqli_query($cn,$q);
header("location:aview_reguser.php");

?>