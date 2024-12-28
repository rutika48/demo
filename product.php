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
                    categary</li>
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
            <div class="contact-grids d-grid">
                <div class="contact-left">
                    <h4>We are here for you</h4>
                    <h6>Sequi doloribus distinctio, possimus ut corrupti facilis odit, ducimus aut aliquid dicta beatae numquam sed odio impedit quas, deleniti neque veritatis sunt.
                    </h6>
                    <div class="hours">
                        <div >                       
                             <h6 class="info mt-3 mb-1">Email:</h6>
                            <p> <a href="mailto:info@example.com">
                               mail@company.com</a></p> 
                               <p class="margin-top mt-2">
                                   <a href="tel:+(+(21)-255-999-8888)">+(21)-255-999-8888</a>
                                </p>
                            </div>
                                <div>              
                                   <h6 class="info mt-3 mb-1">Address:</h6>
                                    <p class="para">Exterior Art, #32841 block, #221DRS Real Exterior Art building, UK.</p>
                                </div>
                    </div>
                </div>
                <div class="contact-right">
                    <form action="/action_page.php">
    <div class="form-group">
      <label for="prod_name">product name:</label>
      <input type="text" class="form-control" id="prod_name" placeholder="Enter product name" name="prod_name">
    </div>
	<div class="form-group">
      <label for="prod_description">product description:</label>
      <input type="text" class="form-control" id="prod_description" placeholder="Enter product description" name="prod_description">
    </div>
	<div class="form-group">
      <label for="cat_id">categary id:</label>
      <input type="text" class="form-control" id="cat_id" placeholder="Enter categary id" name="cat_id">
    </div>
	<div class="form-group">
      <label for="prod_image">product img:</label>
      <input type="text" class="form-control" id="prod_image" placeholder="Enter product image" name="prod_image">
    </div>
	<div class="form-group">
      <label for="prod_price">product price:</label>
      <input type="text" class="form-control" id="prod_price" placeholder="Enter product price" name="prod_price">
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