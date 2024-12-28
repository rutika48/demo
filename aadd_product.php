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
                    <b>Add product</b></li>
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
					<h1><b>Add Product</b></h1>
					</div>
                </div>
				<div class="container">
				<br>
  
				</div>

    <div class="">
    <form enctype="multipart/form-data" action="addprod_code.php" method="post">
    <div class="form-group">
      <label for="product_name">product name:</label>
      <input type="text" class="form-control"  placeholder="Enter product name" name="product_name">
    </div>
	<div class="form-group">
      <label for="product_description">product description:</label>
      <input type="text" class="form-control"  placeholder="Enter product description" name="product_description">
    </div>
	<div class="form-group">
      <label for="cat_id">Select Categary</label>
	  
	  <!-- DYNAMIC DROP DOWN LIST CODE -->	
	  <?php
	  include("connect.php");
	  $q="select * from category";
	  $result=mysqli_query($cn,$q);
	  ?>
	  
	  <select class="form-control" name="cat_id">
	  <?php
		while($row=mysqli_fetch_array($result))
		{
	  ?>
	  <option value="<?php print $row[0];?>"><?php print $row[1];?></option>
	  <?php
		}
	  ?>
	  </select>
	  
      <!-- DYNAMIC DROP DOWN LIST CODE END -->
	  
	</div>
	<div class="form-group">
      <label for="product_image">product img:</label>
	   <input type="file" class="form-control" id="product_image" name="product_image">                         
      </div>
	<div class="form-group">
      <label for="product_price">product price:</label>
      <input type="text" class="form-control"  placeholder="Enter product price" name="product_price">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  </div>

    </div>
</div>

</div>
</section>
<?php  
   include("footer.php");
?>