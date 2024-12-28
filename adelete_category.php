<?php
 include("connect.php");
 $cat_id=$_GET['cat_id'];
 $q="delete from category where cat_id=$cat_id"; 
 mysqli_query($cn,$q);
 header("location:aview_categary.php");
 ?>