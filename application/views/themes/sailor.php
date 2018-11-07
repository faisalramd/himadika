
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Sailor - Bootstrap 3 corporate template</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Bootstrap 3 template for corporate business" />

   <?php
    /** -- Copy from here -- */
    if(!empty($meta))
    foreach($meta as $name=>$content){
      echo "\n\t\t";
      ?><meta name="<?php echo $name; ?>" content="<?php echo $content; ?>" /><?php
         }
    echo "\n";

    if(!empty($canonical))
    {
      echo "\n\t\t";
      ?><link rel="canonical" href="<?php echo $canonical?>" /><?php

    }
    echo "\n\t";

    foreach($css as $file){
      echo "\n\t\t";
      ?><link rel="stylesheet" href="<?php echo $file; ?>" type="text/css" /><?php
    } echo "\n\t";
    /** -- to here -- */
  ?>

  <!-- =======================================================
    Theme Name: Sailor
    Theme URL: https://bootstrapmade.com/sailor-free-bootstrap-theme/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>


  <div id="wrapper">
    <!-- start header -->
    <header>
      <div class="navbar navbar-default navbar-static-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
            <a class="navbar-brand" href="index.html"><img src="<?php echo base_url() ?>/images/himadika.png" alt="" width="199" height="52" /></a>
          </div>
          <div class="navbar-collapse collapse ">
            <ul class="nav navbar-nav">
              <?php foreach ($navbar_menu as $key => $value): ?>
                <li><a href="<?php echo base_url().str_replace(' ', '_', $value) ?>"> <?php echo $value ?> </a></li>
              <?php endforeach ?>
            </ul>
          </div>
        </div>
      </div>
    </header>
    <!-- end header -->
    <section id="inner-headline">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <ul class="breadcrumb">
              <li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
              <li class="active"><?php echo $this->uri->segment(1) ?> </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <section id="content">
          <?php echo $output;?>
    </section>

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <div class="widget">
              <h4>Get in touch with us</h4>
              <address>
          <strong>Sailor company Inc</strong><br>
           Sailor suite room V124, DB 91<br>
           Someplace 71745 Earth </address>
              <p>
                <i class="icon-phone"></i> (123) 456-7890 - (123) 555-7891 <br>
                <i class="icon-envelope-alt"></i> email@domainname.com
              </p>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="widget">
              <h4>Information</h4>
              <ul class="link-list">
                <li><a href="#">Press release</a></li>
                <li><a href="#">Terms and conditions</a></li>
                <li><a href="#">Privacy policy</a></li>
                <li><a href="#">Career center</a></li>
                <li><a href="#">Contact us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="widget">
              <h4>Pages</h4>
              <ul class="link-list">
                <li><a href="#">Press release</a></li>
                <li><a href="#">Terms and conditions</a></li>
                <li><a href="#">Privacy policy</a></li>
                <li><a href="#">Career center</a></li>
                <li><a href="#">Contact us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="widget">
              <h4>Newsletter</h4>
              <p>Fill your email and sign up for monthly newsletter to keep updated</p>
              <div class="form-group multiple-form-group input-group">
                <input type="email" name="email" class="form-control">
                <span class="input-group-btn">
                            <button type="button" class="btn btn-theme btn-add">Subscribe</button>
                        </span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="sub-footer">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <div class="copyright">
                <p>&copy; Sailor Theme - All Right Reserved</p>
                <div class="credits">
                  <!--
                    All the links in the footer should remain intact. 
                    You can delete the links only if you purchased the pro version.
                    Licensing information: https://bootstrapmade.com/license/
                    Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Sailor
                  -->
                  Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <ul class="social-network">
                <li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
                <li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>

  </div>
  <a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
  <!-- javascript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <?php
    foreach($js as $file){
        echo "\n\t\t";
        ?><script src="<?php echo $file; ?>"></script><?php
    } echo "\n\t";
  ?>


</body>

</html>
