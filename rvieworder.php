<?php
  include("rheader.php");
?>
<!-- breadcrumbs -->
<section class="w3l-inner-banner-main">
    <div class="about-inner contact">
        <div class="breadcrumbs-sub">
            <ul class="breadcrumbs-custom-path">
                <li class="right-side propClone"><a href="index.php" class="editContent">Home <span class="fa fa-angle-right" aria-hidden="true"></span></a> <p></li>
                <li class="active editContent">
                   view order</li>
            </ul>
            </div>
</div>
</div>
</section>
<!-- breadcrumbs //-->

<section class="w3l-contact-info-main" id="contact">
    <div class="contact-sec	editContent">
        <div class="container-fluid">
            <div class="map-iframe mb-5">
              
            </div>
        <div class="container">
    <div class="col-md-12">
                <div class="all-title-box">
					<div class="container text-center">
					<h1><b>View Order</b></h1>
					</div>
                </div>
	
	<div class="contact-right">
	
  <table class="table table-striped center" width="100%">
		<tr>
		<th>  Order date </th>
		<th>  Category name </th>
		<th>  Product name</th>
		<th>  Product price</th>
		<th>  Order Quantity </th>
		<th>  Total price</th>
		<th>  Delete</th>
		</tr>
		
		<?php
				include("connect.php");
					
				$user_id=$_SESSION["user_id"];
				
				$q="select * from order_master where user_id=(select user_id from user_register where user_id='$user_id')";
				
				
				//$q="select * from order_master";
				$res=mysqli_query($cn,$q);
				
				if(mysqli_num_rows($res))
				{
				while($row=mysqli_fetch_array($res))
				{
		?>
		<tr>
		<td>
		<?php
		print $row[1];
		?>
		</td>
		<td>
		<?php
		$catid=$row[3];
		$q1="select* from category where cat_id=$catid";
		$res1=mysqli_query($cn,$q1);
		while($row1=mysqli_fetch_array($res1))
				
		print $row1[1];
		?>
		</td>
		<td><?php
		$prodid=$row[4];
		$q2="select* from product_master where product_id=$prodid";
		$res2=mysqli_query($cn,$q2);
		while($row2=mysqli_fetch_array($res2))
				
		print $row2[1];
		?></td>
		<td><?php echo $row[5]; ?></td>
		<td><?php echo $row[6]; ?></td>
		<td><?php echo $row[7]; ?></td>
		<td><a href="rdelete_order.php?order_id=<?php print $row[0];?>"><button type="button" class="btn btn-danger">Delete</button></a></td>
		
		</tr>
		<?php
				}
				}
				else
				{
					echo "Record Not Found";	
				}
		?>
		</table>
    </div>

    </div>
</div>

</div>
</section>
<?php  
   include("footer.php");
?>