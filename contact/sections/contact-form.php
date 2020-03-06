<section class="bottom">
  <div class="container">
    <div class="row row-md-justify">
      <div class="col-md-6 bg-secondary-var-3 inset-3">
        <h2>Contact Us</h2>
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
        <h4>Call or Email us with any questions or inquiries.</h4>
        <p>
          We would be happy to answer your questions.
        </p>
        <address>
                PO Box 447    
                <br>Purcellville VA, 20134  
              </address>
        <div class="contact-info">
          <dl>
            <dt>Telephone</dt>
            <dd><a href="tel:#">1.877.CORES.99</a></dd>
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