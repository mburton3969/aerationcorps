<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
   <?php include 'global/sections/head.php';?> 
  </head>
  <body>

    <!-- Page-->
    <div class="page">
      
      <!-- Page preloader-->
     <?php include 'global/sections/page-loader.php';?>
        <!-- RD Navbar-->
      <?php include 'global/sections/nav.php';?>

<!-- *** Page Content Goes Here *** -->

    <!-- FALL SPECIAL-->
    <?php include 'home/sections/special.php'; ?>  

    <!-- INFO SECTION -->
    <?php include 'home/sections/info.php'; ?>

     
    <!-- How it Works-->
    <?php include 'home/sections/how-it-works.php'; ?>
      
    <!-- Testimonials-->
    <?php include 'about/sections/testimonials.php'; ?>

    <!-- Contact Form-->
    <?php include 'home/sections/contact-form.php'; ?>
    
    <!--Google Map-->
    <?php include 'contact/sections/google-map.php'; ?>
    </div>
<!-- *** Page Content Ends Here *** -->

    <!-- Page Footer-->
    <?php include 'global/sections/footer.php';?>
    
    </div>    

    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>