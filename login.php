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
                  login</li>
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
                <form action="login_code.php" method="post">
					<h1><b> User login</b> </h1>
					<br>
                  <div class="content">
                    <p>If you have an account with us, please log in.</p>
                    <ul class="form-list">
                      <li>
                        <label for="email">Email Address <span class="required">*</span></label>
                        <input type="email" title="Email Address" class="input-text required-entry" id="email" value="" name="email">
                      </li>
                      <li>
                        <label for="password">Password <span class="required">*</span></label>
                        <input type="password" title="Password" id="password" class="input-text required-entry validate-password" name="password">
                      </li>
                    </ul>
                    <div class="buttons-set">
                      <button type="submit" class="btn btn-primary">Submit</button>
					</div>
                      <br>
					  <button><a class="btn btn-primary" href="admin_login.php">Click Here For Admin Login</a></button>
					  
                  </div>
                </div>

               </form>
                </div>
    </div>
</div>

</div>
</section>
<?php
  include("footer.php");
?>