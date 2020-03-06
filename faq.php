<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <?php include 'global/sections/head.php';?> 
    <link href="faq/css/faq-style.css" rel="stylesheet" />
  </head>
  <body>

    <!-- Page-->
    <div class="page">
      <!-- Page preloader-->
     <?php include 'global/sections/page-loader.php';?>
        <!-- RD Navbar-->
      <?php include 'global/sections/nav.php';?>

      <!-- *** Page Content Goes Here *** -->

      <!-- FAQ -->
      <?php include 'faq/sections/faq.php'; ?>
      
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