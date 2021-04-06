<section class="well-lg-var-5 bg-secondary">
  <form id="signup_form" action="signup/php/signup-form-handler.php" method="POST">
    <div class="container" style="max-width:50%;">
      <h2 class="text-center">Sign-Up Now</h2>

      <div class="row text-center">
        <div class="col-md-12">
          <h3 style="color:black;">Customer Type</h3>
          <p style="color:red;font-weight:bold;" id="cust_error"></p>
        </div>
        <div class="col-md-12 text-center">
          <input type="radio" class="" name="cust_type" id="cust_type_new" value="New" style="-webkit-appearance: radio;" /> New Customer &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="radio" class="" name="cust_type" id="cust_type_return" value="Return" style="-webkit-appearance: radio;" /> Return Customer
        </div>
      </div>

      <div class="row">
        <div class="col-md-12 text-center">
          <h3 style="color:black;">Customer Name</h3>
          <p style="color:red;font-weight:bold;" id="name_error"></p>
        </div>
        <div class="col-md-6">
          <input type="text" class="form-input form-control" id="fname" name="fname" placeholder="First Name" />
        </div>
        <div class="col-md-6">
          <input type="text" class="form-input form-control" id="lname" name="lname" placeholder="Last Name" />
        </div>
      </div>

      <div class="row">
        <div class="col-md-12 text-center">
          <h3 style="color:black;">Customer Address</h3>
          <p style="color:red;font-weight:bold;" id="address_error"></p>
        </div>
        <div class="col-md-6">
          <input type="text" class="form-input form-control" id="address" name="address" placeholder="Address Line 1" />
        </div>
        <div class="col-md-6">
          <input type="text" class="form-input form-control" id="address2" name="address2" placeholder="Address Line 2" />
        </div>
        <div class="col-md-4">
          <input type="text" class="form-input form-control" id="city" name="city" placeholder="City" />
        </div>
        <div class="col-md-4">
          <select class="form-input form-control" id="state" name="state">
								<option value="VA">VA</option>
							</select>
        </div>
        <div class="col-md-4">
          <input type="text" class="form-input form-control zipCode" id="zip" name="zip" placeholder="Zip Code" />
        </div>
      </div>

      <div class="row">
        <div class="col-md-6">
          <label for="county">County:</label>
          <select class="form-input form-control" id="county" name="county">
								<option value="Loudoun">Loudoun</option>
								<option value="Fairfax">Fairfax</option>
								<option value="Arlington">Arlington</option>
								<option value="Alexandria">Alexandria</option>
								<option value="Prince William">Prince William</option>
								<option value="Other">Other</option>
							</select>
        </div>
        <div class="col-md-6">
          <label for="lot_size">Lot Size:</label>
          <select class="form-input form-control" id="lot_size" name="lot_size" onchange="get_terms(this.value);">
								<option value="">Select Lot Size</option>
								<option value="1">Up to 1/4 Acre</option>
								<option value="2">1/3 Acre</option>
								<option value="3">1/2 Acre</option>
								<option value="4">2/3 Acre</option>
								<option value="5">3/4 Acre</option>
								<option value="6">1 Acre</option>
								<option value="7">2 or More Acres</option>
							</select>
			<small style="display:inline;">INCLUDING The Footprint Of The House, Driveway, Typical Landscaping, Etc.</small>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12 text-center">
          <h3 style="color:black;">Contact Info</h3>
          <p style="color:red;font-weight:bold;" id="contact_error"></p>
        </div>
        <div class="col-md-5">
          <input type="text" class="form-input form-control phone_us" id="day_phone" name="day_phone" placeholder="Day Time Phone" />
        </div>
        <div class="col-md-2">
          <input type="text" class="form-input form-control" id="ext" name="ext" placeholder="Ext." />
        </div>
        <div class="col-md-5">
          <input type="text" class="form-input form-control phone_us" id="night_phone" name="night_phone" placeholder="Evening Phone" />
        </div>
        <div class="col-md-6">
          <input type="text" class="form-input form-control" id="email" name="email" placeholder="Email" />
        </div>
        <div class="col-md-6">
          <input type="text" class="form-input form-control" id="vemail" name="vemail" placeholder="Verify Email" />
        </div>
        <div class="col-md-12">
          <br>
          <input type="checkbox" class="form-control" id="email_ack" name="email_ack" style="-webkit-appearance:checkbox;" /> I <u>FREQUENTLY CHECK</u> the above email address. I understand that you will <u>email my Service Date</u> AND that you will
          <u>email my invoice</u> to me.
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <h3 style="color:black;">Work to Perform:</h3>
          <p style="color:red;font-weight:bold;" id="work_error"></p>
        </div>
        <div class="col-md-8">
          <input type="checkbox" class="form-control" id="aeration" name="aeration" style="-webkit-appearance:checkbox;" /> Aeration &nbsp;&nbsp;&nbsp;&nbsp;
          <br><br>
          <input type="checkbox" class="form-control" id="overseeding" name="overseeding" style="-webkit-appearance:checkbox;" /> Overseeding
          <br><br>
          <input type="checkbox" class="form-control" id="double_aeration" name="double_aeration" style="-webkit-appearance:checkbox;" /> Double Aeration <small style="display:inline;">(1 1/2 times the standard cost to Aerate your Lot Size)</small>
          <br><br>
          <input type="checkbox" class="form-control" id="double_overseeding" name="double_overseeding" style="-webkit-appearance:checkbox;" /> Double Overseeding <small style="display:inline;">(twice the standard cost to Overseed your Lot Size)</small>
          <br><br>
          <input type="checkbox" class="form-control" id="fertilizer" name="fertilizer" style="-webkit-appearance:checkbox;" /> Application of Premium Organic Fertilizer <small style="display:inline;">(NOT a Top-dressing/Compost -  this is a granular fertilizer - see Services Page for pricing)</small>
        </div>
        <div class="col-md-4">
          <img src="images/acpics/2014LawnContrasts.jpg" style="" />
        </div>
      </div>

      <div class="row">
        <div class="col-md-6">
          <h5>Benefits of Premium Organic Fertilizer</h5>
          <ul>
            <li>* Helps turf maximize water and nutrient uptake and utilization</li>
            <li>* Provides the organic nutritional energy that stimulates and builds microbial populations for enhanced soil resilience. </li>
            <li>* Enhances disease and stress tolerances</li>
            <li>* Ammonium Sulfate for initial color and growth.</li>
            <li>* Combines multiple nitrogen sources for an excellent sustained feeding that provides outstanding residual color, growth, rooting and turf density.</li>
            <li>* In short, this fertilizer helps to bring about dark-green grass while helping to improve the condition of the soil. It's a great supplement for your lawn!</li>
          </ul>
        </div>
        <div class="col-md-6">
          <h5>Do You Need Overseeding or Double-overseeding?</h5>
          <p>If your lawn looks more like the lawn on the left, we recommend Overseeding. If your lawn looks more like the lawn on the right, we recommend Double-overseeding.</p>
          <h5>Aeration or Double-aeration?</h5>
          <p>We use state-of-the-art machines that produce excellent results with one pass. Double-aeration is simply more of a good thing.</p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <h3 style="color:black;">Property Questions</h3>
          <p style="color:red;font-weight:bold;" id="question_error"></p>
          <p>
            Do you maintain any portion of property that is not technically yours (common grounds, public parkland, etc.) that you wish us to service? &nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" class="form-control" name="prop_maintain" id="prop_maintain_yes" value="Yes" style="-webkit-appearance:radio;" /> Yes &nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" class="form-control" name="prop_maintain" id="prop_maintain_no" value="No" style="-webkit-appearance:radio;" /> No
          </p>
          <p>
            Is any portion of your property difficult to identify as belonging to you (irregularly-shaped lot, ambiguous property lines, etc.)? &nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" class="form-control" name="prop_identify" id="prop_identify_yes" value="Yes" style="-webkit-appearance:radio;" /> Yes &nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" class="form-control" name="prop_identify" id="prop_identify_no" value="No" style="-webkit-appearance:radio;" /> No
          </p>
          <p>
            Is there anything unique about your property that we should know? &nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" class="form-control" name="prop_unique" id="prop_unique_yes" value="Yes" style="-webkit-appearance:radio;" /> Yes &nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" class="form-control" name="prop_unique" id="prop_unique_no" value="No" style="-webkit-appearance:radio;" /> No
          </p>
          <p>
            Do you live in a Gated Community? &nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" class="form-control" name="prop_gate" id="prop_gate_yes" value="Yes" style="-webkit-appearance:radio;" /> Yes &nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" class="form-control" name="prop_gate" id="prop_gate_no" value="No" style="-webkit-appearance:radio;" /> No
          </p>
          <p>
            Do you have an underground sprinkler system? &nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" class="form-control" name="prop_sprinkler" id="prop_sprinkler_yes" value="Yes" style="-webkit-appearance:radio;" /> Yes &nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" class="form-control" name="prop_sprinkler" id="prop_sprinkler_no" value="No" style="-webkit-appearance:radio;" /> No
          </p>
          <p>
            Do you have an invisible dog fence (buried wire)? &nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" class="form-control" name="prop_fence" id="prop_fence_yes" value="Yes" style="-webkit-appearance:radio;" /> Yes &nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" class="form-control" name="prop_fence" id="prop_fence_no" value="No" style="-webkit-appearance:radio;" /> No
          </p>
          <p><b>* IF YOU HAVE ANSWERED "YES" TO ANY OF THE ABOVE QUESTIONS, PLEASE ELABORATE IN THE "COMMENTS" BOX.</b></p>
        </div>
      </div>

      <div class="row">
        <p style="color:red;font-weight:bold;" id="comments_terms_error"></p>
        <div class="col-md-6">
          <label for="comments">Comments (Info we need to know for your service):</label>
          <textarea id="comments" name="comments" class="form-input form-control"></textarea>
        </div>
        <div class="col-md-6" id="sr_container">
          <input type="checkbox" style="-webkit-appearance:checkbox;" onchange="load_sr_box();" /> I have a special request regarding scheduling or pricing.
        </div>
        <div class="col-md-12">
          <br>
          <p>
            <input type="checkbox" id="terms_cb" name="terms_cb" style="-webkit-appearance:checkbox;" /> I agree to all of the TERMS AND CONDITIONS <u>below</u> AND I understand that I will be given the option to pay my Invoice online using my Visa, MasterCard,
            Discover, American Express card or my check.
          </p>
          <br>
        </div>
        <div class="col-md-6">
          <button type="button" class="btn btn-default btn-md g-recaptcha" data-sitekey="6LfOUbkUAAAAAIHdijdnmFdUiDKH3mY4Cbinh7wO" data-callback="submit_signup_form" onclick="gtag_report_conversion();">Submit</button>
        </div>
        <div class="col-md-6">
          <img src="images/acpics/payment-options.gif" />
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <h3 style="color:black;">Terms and Conditions</h3>
          <p id="terms_conditions">
            * Please select your Lot Size to view the Terms and Conditions that apply to you. Thank you.
          </p>
        </div>
      </div>
      <input type="hidden" id="atc" name="atc" value="" />
    </div>
  </form>
</section>