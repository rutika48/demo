
<?php

$order_date=date("d-m-Y");

include("connect.php");
session_start();

$user_id=$_SESSION["user_id"];
$prod_id=$_POST["prod_id"];
$order_qty=$_POST["order_qty"];

       $q="select *from product_master where product_id=$prod_id";
	   $res=mysqli_query($cn,$q);
	   if($row=mysqli_fetch_array($res))
	   {
		   $cat_id=$row[3];
		   $prod_price=$row[5];
	   }
	   $total=$prod_price*$order_qty;
	   $q1="insert into order_master(order_date,user_id,cat_id,product_id,product_price,order_qty,total_price) values ('$order_date',$user_id,$cat_id,$prod_id,'$prod_price','$order_qty','$total')";
	   print $q1;
	   mysqli_query($cn,$q1);
	  header("location:rart.php");
	   
	   ?>