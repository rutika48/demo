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
                 <b> Add category</b></li>
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
					<h1><b>Add Category</b></h1>
					<br>
					</div>
                </div>
    <div class="col-md-12">
    <form action="category_code.php" method="post">
    <div class="form-group">
      <label for="cat_name">category name:</label>
      <input type="text" class="form-control" id="cat_name" placeholder="Enter categary name" name="cat_name">
    </div>
	<div class="form-group">
      <label for="cat_description">category description:</label>
      <div><textarea  class="form-control">Enter Description</textarea></div>
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