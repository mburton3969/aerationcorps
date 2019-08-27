<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;" id="customerModal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h5 class="modal-title" id="myLargeModalLabel">Add/Edit Customer</h5>
      </div>
      <div class="modal-body">
        
        
        <form id="portal_signup_form" action="customers/php/portal-signup-form-handler.php" method="POST">
					<div class="row mb-65 text-center">
						<div class="col-md-12">
							<h3>Customer Type</h3>
							<p style="color:red;font-weight:bold;" id="cust_error"></p>
						</div>
						<div class="col-md-12 text-center">
         		  <input type="radio" class="" name="cust_type" id="cust_type_new" value="New" style="-webkit-appearance: radio;" /> New Customer
						  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         		  <input type="radio" class="" name="cust_type" id="cust_type_return" value="Return" style="-webkit-appearance: radio;" /> Return Customer
						</div>
					</div>
					
					<div class="row mb-65">
						<div class="col-md-12 text-center">
							<h3>Customer Name</h3>
							<p style="color:red;font-weight:bold;" id="name_error"></p>
						</div>
						<div class="col-md-6">
							<input type="text" class="form-input form-control" id="fname" name="fname" placeholder="First Name" />
						</div>
						<div class="col-md-6">
							<input type="text" class="form-input form-control" id="lname" name="lname" placeholder="Last Name" />
						</div>
					</div>
					
					<div class="row mb-35">
						<div class="col-md-12 text-center">
							<h3>Customer Address</h3>
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
					
					<div class="row mb-65">
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
							<select class="form-input form-control" id="lot_size" name="lot_size">
								<option value="">Select Lot Size</option>
								<option value="1">Up to 1/4 Acre</option>
								<option value="2">1/3 Acre</option>
								<option value="3">1/2 Acre</option>
								<option value="4">2/3 Acre</option>
								<option value="5">3/4 Acre</option>
								<option value="6">1 Acre</option>
								<option value="7">2 or More Acres</option>
							</select>
						</div>
					</div>
					
					<div class="row mb-65">
						<div class="col-md-12 text-center">
							<h3>Contact Info</h3>
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
					</div>
					
					<div class="row mb-65">
						<div class="col-md-12">
							<h3>Work to Perform:</h3>
							<p style="color:red;font-weight:bold;" id="work_error"></p>
						</div>
						<div class="col-md-12">
							<input type="checkbox" class="" id="aeration" name="aeration" style="-webkit-appearance:checkbox;"/> Aeration
							&nbsp;&nbsp;&nbsp;&nbsp;
							<br><br>
							<input type="checkbox" class="" id="overseeding" name="overseeding" style="-webkit-appearance:checkbox;"/> Overseeding
							<br><br>
							<input type="checkbox" class="" id="double_aeration" name="double_aeration" style="-webkit-appearance:checkbox;"/> Double Aeration <small style="display:inline;">(1 1/2 times the standard cost to Aerate your Lot Size)</small>
							<br><br>
							<input type="checkbox" class="" id="double_overseeding" name="double_overseeding" style="-webkit-appearance:checkbox;"/> Double Overseeding <small style="display:inline;">(twice the standard cost to Overseed your Lot Size)</small>
							<br><br>
							<input type="checkbox" class="" id="fertilizer" name="fertilizer" style="-webkit-appearance:checkbox;"/> Application of Premium Organic Fertilizer <small style="display:inline;">(see Services Page for pricing)</small>
						</div>
					</div>
			
					
					<div class="row mb-65">
						<div class="col-md-12">
							<h3>Property Questions</h3>
							<p style="color:red;font-weight:bold;" id="question_error"></p>
							<p>
							Do you maintain any portion of property that is not technically yours (common grounds, public parkland, etc.) that you wish us to service?
							&nbsp;&nbsp;&nbsp;&nbsp;<br>
							<input type="radio" class="" name="prop_maintain" id="prop_maintain_yes" value="Yes" style="-webkit-appearance:radio;" /> Yes
							&nbsp;&nbsp;&nbsp;&nbsp;
							<input type="radio" class="" name="prop_maintain" id="prop_maintain_no" value="No" style="-webkit-appearance:radio;" /> No
							</p>
							<p>
							Is any portion of your property difficult to identify as belonging to you (irregularly-shaped lot, ambiguous property lines, etc.)?
							&nbsp;&nbsp;&nbsp;&nbsp;<br>
							<input type="radio" class="" name="prop_identify" id="prop_identify_yes" value="Yes" style="-webkit-appearance:radio;" /> Yes
							&nbsp;&nbsp;&nbsp;&nbsp;
							<input type="radio" class="" name="prop_identify" id="prop_identify_no" value="No" style="-webkit-appearance:radio;" /> No
							</p>
							<p>
							Is there anything unique about your property that we should know?
							&nbsp;&nbsp;&nbsp;&nbsp;<br>
							<input type="radio" class="" name="prop_unique" id="prop_unique_yes" value="Yes" style="-webkit-appearance:radio;" /> Yes
							&nbsp;&nbsp;&nbsp;&nbsp;
							<input type="radio" class="" name="prop_unique" id="prop_unique_no" value="No" style="-webkit-appearance:radio;" /> No
							</p>
							<p>
							Do you live in a Gated Community?
							&nbsp;&nbsp;&nbsp;&nbsp;<br>
							<input type="radio" class="" name="prop_gate" id="prop_gate_yes" value="Yes" style="-webkit-appearance:radio;" /> Yes
							&nbsp;&nbsp;&nbsp;&nbsp;
							<input type="radio" class="" name="prop_gate" id="prop_gate_no" value="No" style="-webkit-appearance:radio;" /> No
							</p>
						</div>
					</div>
							
					<div class="row mb-25">
							<p style="color:red;font-weight:bold;" id="comments_terms_error"></p>
						<div class="col-md-6">
							<label for="comments">Customer Comments:</label>
							<textarea id="comments" name="comments" class="form-input form-control" style="min-height:150px;"></textarea>
						</div>
						<div class="col-md-6">
							<label for="internal_comments">Internal Comments:</label>
							<textarea id="internal_comments" name="internal_comments" class="form-input form-control" style="min-height:150px;"></textarea>
						</div>
					</div>
          <input type="hidden" id="form_mode" name="form_mode" />
          <input type="hidden" id="form_cid" name="form_cid" />
				</form>
        
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger text-left" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success text-left" onclick="portal_submit_form();">Save</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>