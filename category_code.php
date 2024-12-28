<?php
include("connect.php");

$cat_name=$_POST["cat_name"];
$cat_description=$_POST["cat_description"];

$q="insert into category(cat_name,cat_description)values('$cat_name','$cat_description')";
print $q;
mysqli_query($cn,$q);

header("location:aview_categary.php");

?>