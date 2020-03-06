<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
   <?php include 'global/sections/head.php';?> 
		<script src="https://www.google.com/recaptcha/api.js" async defer></script>
  </head>
  <body>

    <!-- Page-->
    <div class="page">
      <!-- Page preloader-->
     <?php include 'global/sections/page-loader.php';?>
        <!-- RD Navbar-->
      <?php include 'global/sections/nav.php';?>

<!-- *** Page Content Goes Here *** -->

      <!-- Main services-->
      <?php include 'signup/sections/signup-form.php'; ?>
   
<!-- *** Page Content Ends Here *** -->

    <!-- Page Footer-->
      <?php include 'global/sections/footer.php';?>
    </div>    

		<script src="signup/js/terms.js"></script>
		<script src="signup/js/signup-form-validator.js"></script>
		<script src="global/js/jquery.mask.js"></script>
		<script>
			$(document).ready(function($){
  			$('.phone_us').mask('000.000.0000');
  			$('.zipCode').mask('00000');
			});
		</script>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>