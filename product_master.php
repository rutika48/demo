<?php
include("connect.php");

$product_name=$_POST["product_name"];
$product_description=$_POST["product_description"];
$cat_id=$_POST["cat_id"];
$product_image=$_POST["product_image"];
$product_price=$_POST["product_price"];

$q="insert into product_master(product_name,product_description,cat_id,product_image,product_price)values('$product_name','$product_description',$cat_id,'$product_image','$product_price')";
print $q;
mysqli_query($cn,$q);

?>