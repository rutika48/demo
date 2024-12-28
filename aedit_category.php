<?php
  include("aheader.php");
  include("connect.php");
  
  $cat_id=$_GET['cat_id'];
?>
<!-- breadcrumbs -->
<section class="w3l-inner-banner-main">
    <div class="about-inner contact">
        <div class="breadcrumbs-sub">
            <ul class="breadcrumbs-custom-path">
                <li class="right-side propClone"><a href="index.php" class="editContent">Home <span class="fa fa-angle-right" aria-hidden="true"></span></a> <p></li>
                <li class="active editContent">
                    categary</li>
            </ul>
            </div>
</div>
</div>
</section>
<!-- breadcrumbs //-->

<section class="w3l-contact-info-main" id="contact">
    <div class="contact-sec	editContent">
        
    <div class="container">
    <div class="row">
                <div class="all-title-box">
					<div class="container text-center">
					<br>
					<h1>Add Category</h1>
					<br>
					</div>
                </div>
    <div class="col-md-12">
    <form action="acategory_update_code.php" method="post">
	<?php
	 $q2="select * from category where cat_id=$cat_id";
  
  $result2=mysqli_query($cn,$q2);
  
  if($row2=mysqli_fetch_array($result2))
  {
	  ?>
    <div class="form-group">
      <label for="cat_name">category name:</label>
      <input type="text" class="form-control" placeholder="Enter category name" name="cat_name" value="<?php print $row2[1];?>">
	  <input type="hidden" name="cat_id" value="<?php print $cat_id; ?>">		
	
   </div>
	<div class="form-group">
      <label for="cat_description">category description:</label>
      <input type="text" class="form-control"  placeholder="Enter categary description" value="<?php print $row2[2];?>" name="cat_description">
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