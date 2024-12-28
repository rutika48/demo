<?php
  include("aheader.php");
  include("connect.php");
	  
  $prod_id=$_GET['prod_id'];
  
  $q3="select * from product_master where product_id=$prod_id";
  
  $result3=mysqli_query($cn,$q3);
  
  if($row3=mysqli_fetch_array($result3))
  {
?>

<!-- breadcrumbs -->
<section class="w3l-inner-banner-main">
    <div class="about-inner contact">
        <div class="breadcrumbs-sub">
            <ul class="breadcrumbs-custom-path">
                <li class="right-side propClone"><a href="index.php" class="editContent">Home <span class="fa fa-angle-right" aria-hidden="true"></span></a> <p></li>
                <li class="active editContent">
                    Edit Product</li>
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
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d317718.69319292053!2d-0.3817765050863085!3d51.528307984912544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C+UK!5e0!3m2!1sen!2spl!4v1562654563739!5m2!1sen!2spl" width="100%" frameborder="0" style="border: 0px; pointer-events: none;" allowfullscreen=""></iframe> </div>
            </div>
        <div class="container">
    <div class="col-md-12">
                <div class="all-title-box">
					<div class="container text-center">
					<h1>Edit Product</h1>
					</div>
                </div>
				<div class="container">
				<br>
  
				</div>

    <div class="">
    <form enctype="multipart/form-data" action="aproduct_update_code.php" method="post">
    <div class="form-group">
      <label for="product_name">product name:</label>
      <input type="text" class="form-control" value="<?php print $row3[1]; ?>"  placeholder="Enter product name" name="product_name">
	  <input type="hidden" name="product_id" value="<?php print $prod_id; ?>">		
	</div>
	<div class="form-group">
      <label for="product_description">product description:</label>
      <input type="text" class="form-control" value="<?php print $row3[2]; ?>"  placeholder="Enter product description" name="product_description">
    </div>
	<div class="form-group">
      <label for="cat_id">Select Categary</label>
	  
	  <!-- DYNAMIC DROP DOWN LIST CODE -->	
	  <?php
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
	   <input type="file" class="form-control" name="product_image">                         
      </div>
	<div class="form-group">
      <label for="product_price">product price:</label>
      <input type="text" class="form-control"  value="<?php print $row3[5]; ?>" placeholder="Enter product price" name="product_price">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  </div>

    </div>
</div>

</div>
</section>
<?php  
  }
   include("footer.php");
?>