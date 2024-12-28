<?php
  include("aheader.php");
?>

<!-- breadcrumbs -->
<section class="w3l-inner-banner-main">
    <div class="about-inner contact">
        <div class="breadcrumbs-sub">
            <ul class="breadcrumbs-custom-path">
                <li class="right-side propClone"><a href="index.php" class="editContent">Home <span class="fa fa-angle-right" aria-hidden="true"></span></a> <p></li>
                <li class="active editContent">
                   view product</li>
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
					<h1><b>View Product</b></h1>
					</div>
                </div>
				<div class="container">
				<br>
  
				</div>

	<div class="contact-right">
	<table class="table table-striped">
		<tr>
		<th> product Name</th>
		<th> Description</th>
		<th> category name</th>
		<th> producti mage</th>
		<th> product price</th>		
		<th> Edit</th>
		<th> Delete</th>
		</tr>
		
		<?php
				include("connect.php");
					
				$q="select * from product_master";
				$res=mysqli_query($cn,$q);
				
				
				while($row=mysqli_fetch_array($res))
				{
		?>
		<tr>
		<td><?php echo $row[1]; ?></td>
		<td><?php echo $row[2]; ?></td>
		<td><?php
		
			$q1="select * from category where cat_id=$row[3]";
			$res1=mysqli_query($cn,$q1);
			if($row1=mysqli_fetch_array($res1))
			{
				print $row1[1];
			}
		 
		?>
		</td>
		<td><img src="<?php echo $row[4];?>" width="150px" height="150px"></td>
		<td><?php echo $row[5]; ?></td>
		<td><a href="aedit_product.php?prod_id=<?php print $row[0];?>"><button type="button" class="btn btn-success">Edit</button></a></td>
		<td><a href="adelete_product.php?prod_id=<?php print $row[0];?>"><button type="button" class="btn btn-danger">Delete</button></a></td>
		
		</tr>
		<?php
		}
		?>
		</table>
  
    </div>

    </div>
</div>
        
</section>

<?php  
   include("footer.php");
?>