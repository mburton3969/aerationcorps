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

      <!-- About us-->
      <section class="well-lg-var-3 bg-secondary">
        <div class="container">
          <h2 class="text-center">About us</h2>
          <div class="row row-30 text-center offset-4">
            <div class="col-md-4"><img src="images/acpics/backgrounds/about.jpg" width="370" height="500" alt=""></div>
            <div class="col-md-8 text-center text-md-left">
              <p>
               The Aeration Corps has been providing core aeration and related services for almost 20 years in Loudoun and surrounding counties. Many lawncare and landscape companies provide aeration services - typically when their regular season ends, using rented equipment.
              </p>
              <p>
                   
              </p>
              <h6>
                <strong>We pride ourselves on our highly-trained technicians who specialize in aeration service using our own commercial equipment.</strong>
              </h6>
              <p>
                   
              </p>
              <p>
                Our goal is to delight our customers with excellent service and fair pricing. 
              </p>
              <p>
                <strong>We are licensed and fully insured.</strong>
              </p>
            </div>
          </div>
        </div>
      </section>
      <!-- How it Works-->
      <section>
        <div class="container">
          <div class="row row-md-reverse">
            <div class="col-md-5 bg-secondary-var-1">
              <h2>
                How To Reserve Your Service:
              </h2>
              <p>
                <ul>
                  <li>
                    <strong>1.</strong> Sign-up at <a href="index.php">TheAerationCorps.com</a> (takes just 60 seconds)
                  </li>
                  <li>
                    <strong>2.</strong> We schedule your service & notify you prior to service 
                  </li>
                  <li>
                    <strong>3.</strong> Payment is due (online or mail) after work is complete
                  </li>
                  <li style="font-style: italic; font-size: 11px">
                    Pay securely online OR mail in payment
                  </li>
                </ul>
              </p><a class="btn btn-secondary-var-1 btn-md" href="faq.php">FAQ's</a>
              <div class="triangel-var-1"></div>
            </div>
            <div class="col-md-7 reg-bg"></div>
          </div>
        </div>
      </section>
      <!-- Testimonials-->
      
      <?php include 'about/sections/testimonials.php'; ?>
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