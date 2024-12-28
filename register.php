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
                    register</li>
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
    <div class="row">
                <div class="all-title-box">
					<div class="container text-center">
					<br>
					<h1><b>Registration</b></h1>
					<br>
					</div>
                </div>
    <div class="col-md-12">
    <form action="register_code.php" method="post">
	
	<div class="form-group">
      <label for="user_name">name:</label>
      <input type="text" class="form-control" id="user_name" placeholder="Enter name" name="user_name">
    </div>
	<div class="form-group">
      <label for="user_address">Address:</label>
      <input type="text" class="form-control" id="user_address" placeholder="Enter address" name="user_address">
    </div>
	<div class="form-group">
      <label for="user_city">City:</label>
      <input type="text" class="form-control" id="user_city" placeholder="Enter city" name="user_city">
    </div>
	<div class="form-group">
      <label for="user_pincode">Pincode:</label>
      <input type="text" class="form-control" id="user_pincode" placeholder="Enter pincode" name="user_pincode">
    </div>
	<div class="form-group">
      <label for="user_contactno">Contact No:</label>
      <input type="text" class="form-control" id="user_contactno" placeholder="Enter contact no" name="user_contactno">
    </div>
	<div class="form-group">
      <label for="user_birthdate">Birth Date:</label>
      <input type="date" class="form-control" id="user_birthdate" placeholder="Birth Date" name="user_birthdate">
    </div>
	<div class="form-group">
      <label for="user_email">Email:</label>
      <input type="email" class="form-control" id="user_email" placeholder="Enter email" name="user_email">
    </div>
    <div class="form-group">
      <label for="user_password">Password:</label>
      <input type="password" class="form-control" id="user_password" placeholder="Enter password" name="user_password">
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