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
                    Admin Login</li>
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
            <div class="contact-grids d-grid">
                <div class="contact-right">
				
                   <form action="adminlogin_code.php" method="post">
				   
					<h1><b>Admin Login</b></h1><br>
					
					<div class="form-group">
						<label for="admin_username"> admin Email Address <span class="required">*</span></label>
                        <input type="admin_username" title="Email Address" class="input-text required-entry" id="admin_username" value="" name="admin_username">
                    </div>
					   
					<div class="form-group">
					<label for="admin_password">admin Password <span class="required">*</span></label>
                    <input type="password" title="Password" id="admin_password" class="input-text required-entry validate-password" name="admin_password">
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