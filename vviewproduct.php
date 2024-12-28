<?php
  include("header.php");
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
                   View Category</li>
            </ul>
			
            </div>
</div>
</div>
</section>
<!-- breadcrumbs //-->


<section class="w3l-covers-18">
        <div class="covers-main editContent">
            <div class="container">
                
				<div class="main-titles-head ">
                <h3 class="header-name editContent">
					Our Art Gallery
                </h3>
				</div>
				
				
				<div class="gallery-image row">
                  
				  <?php
					include("connect.php");
					
					$q="select * from product_master where cat_id=$cat_id";
					$res=mysqli_query($cn,$q);
				
				
					while($row=mysqli_fetch_array($res))
					{
					?>
					<div class="img-box col-lg-4 col-md-6 col-sm-6">
                    <img src="<?php print $row[4]; ?>" alt="product" width="250px" height="250px">
                    <h5 class="my-2"><b><?php print $row[1];?></b></h5>
                    <p class="para"><?php print $row[2]; ?></p>
					</div>
				  <?php
					}
				  ?>
                  </div>
                </div>
            </div>
        </div>
    </section>



<?php  
   include("footer.php");
?>