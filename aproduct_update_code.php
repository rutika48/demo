<?php
include("connect.php");
 
 
 $photo="product_image/".$_FILES['product_image']['name'];
move_uploaded_file($_FILES['product_image']['tmp_name'],$photo);

$prod_id=$_POST["product_id"];
$prod_name=$_POST["product_name"];
$prod_description=$_POST["product_description"];
$cat_id=$_POST["cat_id"];
$prod_price=$_POST["product_price"];

 
$q="update product_master set product_name='$prod_name',product_description='$prod_description',cat_id=$cat_id,product_image='$photo',product_price=$prod_price where product_id=$prod_id";

mysqli_query($cn,$q);
print $q;

header("Location:aview_product.php");
?>