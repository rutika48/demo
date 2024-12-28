<?php
 include("connect.php");
 $order_id=$_GET['order_id'];
 $q="delete from order_master where order_id=$order_id"; 
 mysqli_query($cn,$q);
 header("location:aview_order.php");
 ?>