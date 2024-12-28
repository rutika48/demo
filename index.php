<?php 
include("header.php");
?>


<section class="w3l-hero-headers-9" id="home">
  <div class="slide text-center header11" data-selector="header11">
      <div class="container">
          <div class="banner-text ">
              <h5 class=" ">Dream Comes True With <br>Our Talented Artiest .</h5>
              <p class=" ">We have been providing beautiful paintings to our customers since 2022.</p>
              </div>
      </div>

  </div>
</section>

<section class="w3l-covers-18">
        <div class="covers-main editContent">
            <div class="container">
                
				<div class="main-titles-head ">
                </div>
				
				
				<div class="gallery-image row">
                  
				  <?php
					include("connect.php");
					
					$q="select * from product_master";
					$res=mysqli_query($cn,$q);
				
				
					while($row=mysqli_fetch_array($res))
					{
					?>
					<div class="img-box col-lg-4 col-md-6 col-sm-6" style="margin-top:30px;">
                    <img src="<?php print $row[4]; ?>" alt="product" width="250px" height="250px">
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