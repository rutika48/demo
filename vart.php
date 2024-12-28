<?php
  include("header.php");
?>
<!-- breadcrumbs -->
<section class="w3l-inner-banner-main">
    <div class="about-inner contact">
        <div class="breadcrumbs-sub">
            <ul class="breadcrumbs-custom-path">
                <li class="right-side propClone"><a href="index.php" class="editContent">Home <span class="fa fa-angle-right" aria-hidden="true"></span></a> <p></li>
                <li class="active editContent">
                   Art</li>
            </ul>
            </div>
</div>
</div>
</section>
<!-- breadcrumbs //-->
<section class="w3l-recent-work-hobbies" id="services"> 
    <div class="recent-work editContent">
        <div class="container">
            <div class="row service-service">
                
				<?php
				include("connect.php");
					
				$q="select * from category";
				$res=mysqli_query($cn,$q);
				
				
				while($row=mysqli_fetch_array($res))
				{
				?>
				<div class="col-lg-4 col-md-6" style="width:300px;height:400px;">
                        <div class="color-white editContent">
                                  
                        <h5><a href="vviewproduct.php?cat_id=<?php print $row[0];?>" class="editContent">
                            <?php print $row[1];?></a></h5>
                        <p class="para editContent" style="text-align:justify;"><?php print $row[2];?></p>
                            <a href="vviewproduct.php?cat_id=<?php print $row[0];?>" class="action-button btn mt-3">More Detail <span class="fa fa-angle-double-right"></span></a>
					</div>
                </div>
				
				<?php
				}
				?>
				
				
            </div>
        </div>
    </div>
</section>

<?php  
   include("footer.php");
?>