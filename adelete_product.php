<?php
 include("connect.php");
 $prod_id=$_GET['prod_id'];
 $q="delete from product_master where product_id=$prod_id"; 
 mysqli_query($cn,$q);
 header("location:aview_product.php");
 ?>