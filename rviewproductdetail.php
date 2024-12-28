<?php
  include("rheader.php");
  include("connect.php");
  
  
  $prod_id=$_GET['prod_id'];
  
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
					
					$q="select * from product_master where product_id=$prod_id";
					$res=mysqli_query($cn,$q);
				
				
					while($row=mysqli_fetch_array($res))
					{
						
					?>
					
					
					
				<div  class="row">
				<div class="column2 col-lg-6">
				<img src="<?php print $row[4]; ?>" alt="product" width="250px" height="250px">
				</div>
				<div class="nature-row  coloum4 col-lg-6">
				<h3><?php print $row[1]; ?></h3>
				<p class="para editContent text ">
				Product Description :<?php print $row[2]; ?><br>
				Product Price :<?php print $row[5]; ?><br>
				</p>
				<div>
				</div>
				<form action="addorder.php" method="post">
				<input type="number" name="order_qty" id="order_qty" class="form-control">
				<input type="hidden" name="prod_id" value="<?php print $prod_id; ?>"> 
				<input type="submit" name="submit" value="order now" class="btn btn-primary">
				</form>
				</div>
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