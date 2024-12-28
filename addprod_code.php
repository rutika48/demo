<?php
include("connect.php");


$photo="product_image/".$_FILES['product_image']['name'];
move_uploaded_file($_FILES['product_image']['tmp_name'],$photo);

$prod_name=$_POST["product_name"];
$prod_description=$_POST["product_description"];
$cat_id=$_POST["cat_id"];
$prod_price=$_POST["product_price"];
			
$q="insert into product_master(product_name,product_description,cat_id,product_image,product_price)values('$prod_name','$prod_description',$cat_id,'$photo','$prod_price')";
print $q;
mysqli_query($cn,$q);

header("location:aview_product.php");

?>