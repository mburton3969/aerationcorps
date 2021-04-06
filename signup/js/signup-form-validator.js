function submit_signup_form(token){
  
  if(!$("input[name='cust_type']:checked").val()) {
    document.getElementById('cust_error').innerHTML = '* Please Select a Customer Type!';
    window.location.href = '#cust_error';
    window.scrollTo(window.scrollX, window.scrollY - 100);
    grecaptcha.reset();
    return;
  }
  
  if(document.getElementById('fname').value === ''){
    document.getElementById('name_error').innerHTML = '* Please Enter Your First Name!';
    window.location.href = '#name_error';
    window.scrollTo(window.scrollX, window.scrollY - 100);
    grecaptcha.reset();
    return;
  }
  
  if(document.getElementById('lname').value === ''){
    document.getElementById('name_error').innerHTML = '* Please Enter Your Last Name!';
    window.location.href = '#name_error';
    window.scrollTo(window.scrollX, window.scrollY - 100);
    grecaptcha.reset();
    return;
  }
  
  if(document.getElementById('address').value === ''){
    document.getElementById('address_error').innerHTML = '* Please Enter Your Street Address!';
    window.location.href = '#address_error';
    window.scrollTo(window.scrollX, window.scrollY - 100);
    grecaptcha.reset();
    return;
  }
  
  if(document.getElementById('city').value === ''){
    document.getElementById('address_error').innerHTML = '* Please Enter Your City!';
    window.location.href = '#address_error';
    window.scrollTo(window.scrollX, window.scrollY - 100);
    grecaptcha.reset();
    return;
  }
  
  if(document.getElementById('zip').value === ''){
    document.getElementById('address_error').innerHTML = '* Please Enter Your Zip Code!';
    window.location.href = '#address_error';
    window.scrollTo(window.scrollX, window.scrollY - 100);
    grecaptcha.reset();
    return;
  }
  
  if(document.getElementById('lot_size').value === ''){
    document.getElementById('address_error').innerHTML = '* Please Select You Lot Size!';
    window.location.href = '#address_error';
    window.scrollTo(window.scrollX, window.scrollY - 100);
    grecaptcha.reset();
    return;
  }
  
  if(document.getElementById('day_phone').value === ''){
    document.getElementById('contact_error').innerHTML = '* Please Enter Your Daytime Phone Number!';
    window.location.href = '#contact_error';
    window.scrollTo(window.scrollX, window.scrollY - 100);
    grecaptcha.reset();
    return;
  }
  
  /*if(document.getElementById('night_phone').value === ''){
    document.getElementById('contact_error').innerHTML = '* Please Enter Your Evening Phone Number!';
    window.location.href = '#contact_error';
    window.scrollTo(window.scrollX, window.scrollY - 100);
    grecaptcha.reset();
    return;
  }*/
  
  if(document.getElementById('email').value === ''){
    document.getElementById('contact_error').innerHTML = '* Please Enter Your Email Address!';
    window.location.href = '#contact_error';
    window.scrollTo(window.scrollX, window.scrollY - 100);
    grecaptcha.reset();
    return;
  }
  
  if(document.getElementById('vemail').value === ''){
    document.getElementById('contact_error').innerHTML = '* Please Enter Your Email Address again for verification!';
    window.location.href = '#contact_error';
    window.scrollTo(window.scrollX, window.scrollY - 100);
    grecaptcha.reset();
    return;
  }
  
  if(document.getElementById('email').value !== document.getElementById('vemail').value){
    document.getElementById('contact_error').innerHTML = '* The Email Addresses Entered Do Not Match!';
    window.location.href = '#contact_error';
    window.scrollTo(window.scrollX, window.scrollY - 100);
    grecaptcha.reset();
    return;
  }
  
  if(document.getElementById('email_ack').checked === false){
    document.getElementById('contact_error').innerHTML = '* Please Check the Box Below to Acknowledge the Info About the Use of Emails!';
    window.location.href = '#contact_error';
    window.scrollTo(window.scrollX, window.scrollY - 100);
    grecaptcha.reset();
    return;
  }
  
  if(document.getElementById('aeration').checked === false && document.getElementById('overseeding').checked === false && document.getElementById('double_aeration').checked === false && document.getElementById('double_overseeding').checked === false && document.getElementById('fertilizer').checked === false){
    document.getElementById('work_error').innerHTML = '* You Must Select at Least 1 Service to Perform!';
    window.location.href = '#work_error';
    window.scrollTo(window.scrollX, window.scrollY - 100);
    grecaptcha.reset();
    return;
  }
  var q_trip = false;
  if(!$("input[name='prop_maintain']:checked").val()) {
    document.getElementById('question_error').innerHTML = '* Please Answer ALL of the Questions in This Section!';
    window.location.href = '#question_error';
    window.scrollTo(window.scrollX, window.scrollY - 100);
    grecaptcha.reset();
    return;
  }else if($("#prop_maintain_yes").is(':checked')){
    q_trip = true;
  }
  
  if(!$("input[name='prop_identify']:checked").val()) {
    document.getElementById('question_error').innerHTML = '* Please Answer ALL of the Questions in This Section!';
    window.location.href = '#question_error';
    window.scrollTo(window.scrollX, window.scrollY - 100);
    grecaptcha.reset();
    return;
  }else if($("#prop_identify_yes").is(':checked')){
    q_trip = true;
  }
  
  if(!$("input[name='prop_unique']:checked").val()) {
    document.getElementById('question_error').innerHTML = '* Please Answer ALL of the Questions in This Section!';
    window.location.href = '#question_error';
    window.scrollTo(window.scrollX, window.scrollY - 100);
    grecaptcha.reset();
    return;
  }else if($("#prop_unique_yes").is(':checked')){
    q_trip = true;
  }
  
  if(!$("input[name='prop_gate']:checked").val()) {
    document.getElementById('question_error').innerHTML = '* Please Answer ALL of the Questions in This Section!';
    window.location.href = '#question_error';
    window.scrollTo(window.scrollX, window.scrollY - 100);
    grecaptcha.reset();
    return;
  }else if($("#prop_gate_yes").is(':checked')){
    q_trip = true;
  }
  
  if(!$("input[name='prop_sprinkler']:checked").val()) {
    document.getElementById('question_error').innerHTML = '* Please Answer ALL of the Questions in This Section!';
    window.location.href = '#question_error';
    window.scrollTo(window.scrollX, window.scrollY - 100);
    grecaptcha.reset();
    return;
  }else if($("#prop_sprinkler_yes").is(':checked')){
    q_trip = true;
  }
  
  if(!$("input[name='prop_fence']:checked").val()) {
    document.getElementById('question_error').innerHTML = '* Please Answer ALL of the Questions in This Section!';
    window.location.href = '#question_error';
    window.scrollTo(window.scrollX, window.scrollY - 100);
    grecaptcha.reset();
    return;
  }else if($("#prop_fence_yes").is(':checked')){
    q_trip = true;
  }
  
  if(document.getElementById('comments').value === '' && q_trip === true){
    document.getElementById('comments_terms_error').innerHTML = '* Please Enter Comments Regarding the questions above that were answered YES!';
    window.location.href = '#comments_terms_error';
    window.scrollTo(window.scrollX, window.scrollY - 100);
    grecaptcha.reset();
    return;
  }
  
  if(document.getElementById('terms_cb').checked === false){
    document.getElementById('comments_terms_error').innerHTML = '* Please Check the Box to Accept the Terms and Conditions!';
    window.location.href = '#comments_terms_error';
    window.scrollTo(window.scrollX, window.scrollY - 100);
    grecaptcha.reset();
    return;
  }
  
  //Add Tracking...
  var atc = document.getElementById('atc');
  //if(localStorage.getItem('ad_code')){
    atc.value = localStorage.getItem('ad_code');
    localStorage.setItem('ads','YES!');
  //}else{
    //atc.value = '';
  //}
  
  //Submit the form...
  document.getElementById('signup_form').submit();
}