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

      <!-- Break-->
      <section class="well-lg well-lg-var-2 bg-secondary-var-2" style="background-color: #f3b243;">
        <div class="container text-center">
          <div class="row row-xs-center">
          </div>
        </div>
      </section>
      <!-- Contact Form-->
      <section class="bottom">
        <div class="container">
          <div class="row row-md-justify">
            <div class="col-md-6 bg-secondary-var-3 inset-3">
              <h2>contact form</h2>
              <!-- RD Mailform-->
              <form class="rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                <div class="row row-30">
                  <div class="col-sm-6">
                    <div class="form-wrap">
                      <label class="form-label" for="contact-name">Name:</label>
                      <input class="form-input" id="contact-name" type="text" name="name" data-constraints="@Required">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-wrap">
                      <label class="form-label" for="contact-email">Email:</label>
                      <input class="form-input" id="contact-email" type="text" name="email" data-constraints="@Required @Email">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-wrap">
                      <label class="form-label" for="contact-message">Message:</label>
                      <textarea class="form-input" id="contact-message" name="message" data-constraints="@Required"></textarea>
                    </div>
                  </div>
                </div>
                <button class="btn btn-md btn-secondary btn-no-arrow" type="submit">send message</button>
              </form>
            </div>
            <div class="col-md-4 well-sm">
              <h2>Address</h2>
              <p>
                Email us with any questions or inquiries. 
                <br>We would be happy to answer your questions.
              </p>
              <address>
                PO Box 447    
                <br>Purcellville VA, 20134  
              </address>
              <div class="contact-info">
                <dl>
                  <dt>Telephone</dt>
                  <dd><a href="tel:#">1 (877) 267-3799</a></dd>
                </dl>
                <dl>
                </dl>E-mail:<a class="mail" href="mailto:#"> service@theaerationcorps.com</a>
              </div>
              <div>
                <p>
                     
                </p>
                <a class="btn btn-default btn-md" href="faq.php">FAQ's</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Break-->
      <section class="well-lg well-lg-var-2 bg-secondary-var-2" style="background-color: #f3b243;">
        <div class="container text-center">
          <div class="row row-xs-center">
          </div>
        </div>
      </section>
    <!--Google Map-->
      <section class="section">
        <!--Please, add the data attribute data-key="YOUR_API_KEY" in order to insert your own API key for the Google map.-->
        <!--Please note that YOUR_API_KEY should replaced with your key.-->
        <!--Example: <div class="google-map-container" data-key="YOUR_API_KEY">-->
        <div class="google-map-container" data-center="9870 St Vincent Place, Glasgow, DC 45 Fr 45." data-zoom="5" data-icon="images/gmap_marker.png" data-icon-active="images/gmap_marker_active.png" data-styles="[{&quot;featureType&quot;:&quot;all&quot;,&quot;elementType&quot;:&quot;labels.text.fill&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:36},{&quot;color&quot;:&quot;#000000&quot;},{&quot;lightness&quot;:40}]},{&quot;featureType&quot;:&quot;all&quot;,&quot;elementType&quot;:&quot;labels.text.stroke&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;},{&quot;color&quot;:&quot;#000000&quot;},{&quot;lightness&quot;:16}]},{&quot;featureType&quot;:&quot;all&quot;,&quot;elementType&quot;:&quot;labels.icon&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;administrative&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#000000&quot;},{&quot;lightness&quot;:20}]},{&quot;featureType&quot;:&quot;administrative&quot;,&quot;elementType&quot;:&quot;geometry.stroke&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#000000&quot;},{&quot;lightness&quot;:17},{&quot;weight&quot;:1.2}]},{&quot;featureType&quot;:&quot;administrative.locality&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:&quot;-2&quot;},{&quot;visibility&quot;:&quot;on&quot;}]},{&quot;featureType&quot;:&quot;landscape&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#000000&quot;},{&quot;lightness&quot;:20}]},{&quot;featureType&quot;:&quot;poi&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#000000&quot;},{&quot;lightness&quot;:21}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#000000&quot;},{&quot;lightness&quot;:17}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;geometry.stroke&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#000000&quot;},{&quot;lightness&quot;:29},{&quot;weight&quot;:0.2}]},{&quot;featureType&quot;:&quot;road.arterial&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#000000&quot;},{&quot;lightness&quot;:18}]},{&quot;featureType&quot;:&quot;road.local&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#000000&quot;},{&quot;lightness&quot;:16}]},{&quot;featureType&quot;:&quot;transit&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#000000&quot;},{&quot;lightness&quot;:19}]},{&quot;featureType&quot;:&quot;water&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#050505&quot;},{&quot;lightness&quot;:17}]}]">
          <div class="google-map"></div>
          <ul class="google-map-markers">
            <li data-location="9870 St Vincent Place, Glasgow, DC 45 Fr 45." data-description="9870 St Vincent Place, Glasgow"></li>
          </ul>
        </div>
      </section>
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