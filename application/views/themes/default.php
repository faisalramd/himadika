<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Baker Bootstrap Theme</title>
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:400,300|Raleway:300,400,900,700italic,700,300,600">

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

		foreach($js as $file){
				echo "\n\t\t";
				?><script src="<?php echo $file; ?>"></script><?php
		} echo "\n\t";

		/** -- to here -- */
	?>

    <!-- Le styles -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/themes/default/css/jquery.bxslider.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/themes/default/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/themes/default/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/themes/default/css/animate.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/themes/default/css/style.css">
  <!-- =======================================================
    Theme Name: Baker
    Theme URL: https://bootstrapmade.com/baker-free-onepage-bootstrap-theme/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>

  <div class="loader"></div>
  <div id="myDiv">
    <!--HEADER-->
    <div class="header">
      <div class="bg-color">
        <header id="main-header">
          <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
                <a class="navbar-brand" href="#">Ba<span class="logo-dec">ker</span></a>
              </div>
              <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                	<?php foreach ($navbar_menu as $key => $value): ?>
                		<?php if ($key == 0): ?>
                			<li class="active">	<a href="#main-header"> <?php echo $value ?> </a></li>
                		<?php else: ?>
                			<li class="">		<a href="#<?php echo str_replace(' ', '_', $value) ?>"> <?php echo $value ?> </a></li>
                		<?php endif ?>
                	<?php endforeach ?>
                </ul>
              </div>
            </div>
          </nav>
        </header>
        <div class="wrapper">
        	<?php echo $output;?>
        </div>
      </div>
    </div>
    <!--/ HEADER-->
    <!-- BODY SECTIONS -->
    <?php foreach ($navbar_menu as $key => $value): ?>
		<section id="<?php echo str_replace(' ', '_', $value) ?>" class="section-padding wow fadeIn delay-05s">
	    	<?php echo $this->load->get_section(str_replace(' ', '_', $value)); ?>
	    </section>
	<?php endforeach ?>
	<!--/ BODY SECTIONS -->

	<!-- FOOTER -->
    <footer id="footer">
      <div class="container">
        <div class="row text-center">
          <p>&copy; Baker Theme. All Rights Reserved.</p>
          <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Baker
            -->
            Designed by <a href="https://bootstrapmade.com/">Bootstrap Templates</a>
          </div>
        </div>
      </div>
    </footer>
    <!--/ FOOTER -->
  </div>
  <script src="<?php echo base_url(); ?>assets/themes/default/js/custom.js"></script>
</body>
</html>
