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
                   <b>View Register User</b></li>
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
					<h1><b>View Register User</b></h1>
					</div>
                </div>
				

	<div class="contact-right">
       <table class="table table-striped center" width="100%">
		<tr>
		<th>  Name </th>
		<th>  Address</th>
		<th>  City </th>
		<th>  Pincode</th>
		<th>  Contactno</th>
		<th>  Birthdate</th>
		<th>  Email Address</th>
		<th>  Password</th>
		<th>  Delete</th>
		</tr>
		
		<?php
				include("connect.php");
					
				$q="select * from user_register";
				$res=mysqli_query($cn,$q);
				
				
				while($row=mysqli_fetch_array($res))
				{
		?>
		<tr>
		<td><?php echo $row[1]; ?></td>
		<td><?php echo $row[2]; ?></td>
		<td><?php echo $row[3]; ?></td>
		<td><?php echo $row[4]; ?></td>
		<td><?php echo $row[5]; ?></td>
		<td><?php echo $row[6]; ?></td>
		<td><?php echo $row[7]; ?></td>
		<td><?php echo $row[8]; ?></td>
		<td><a href="adelete_user.php?user_id=<?php print $row[0];?>"><button type="button" class="btn btn-danger">Delete</button></a></td>
		
		
		</tr>
		<?php
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