<?php
 
 include("connect.php");
 
 $cat_id=$_POST["cat_id"];
 $cat_name=$_POST["cat_name"];
 $cat_description=$_POST["cat_description"];
  
 $q="update category set cat_name='$cat_name',cat_description='$cat_description' where cat_id=$cat_id";

mysqli_query($cn,$q);

header("Location:aview_categary.php");
?>