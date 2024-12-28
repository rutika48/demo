<?php
include("connect.php");

$order_date=$_POST["order_date"];
$user_id=$_POST["user_id"];
$cat_id=$_POST["cat_id"];
$product_id=$_POST["product_id"];
$product_price=$_POST["product_price"];
$order_qut=$_POST["order_qut"];
$total_price=$_POST["total_price"];

$q="insert into user_register(order_date,user_id,cat_id,product_id,product_price,order_qut,total_price)values('$order_date',$user_id,$cat_id,$product_id,'$product_price','$order_qut','$total_price')";
print $q;
mysqli_query($cn,$q);

?>