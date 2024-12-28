<?php
 include("connect.php");
 $user_id=$_GET['user_id'];
 $q="delete from user_register where user_id=$user_id"; 
 mysqli_query($cn,$q);
 header("location:aview_reguser.php");
 ?>