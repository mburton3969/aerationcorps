function portal_submit_form(){
  
  if(!$("input[name='cust_type']:checked").val()) {
    document.getElementById('cust_error').innerHTML = '* Please Select a Customer Type!';
    window.location.href = '#cust_error';
    window.scrollTo(window.scrollX, window.scrollY - 100);
    return;
  }
  
  if(document.getElementById('fname').value === ''){
    document.getElementById('name_error').innerHTML = '* Please Enter Your First Name!';
    window.location.href = '#name_error';
    window.scrollTo(window.scrollX, window.scrollY - 100);
    return;
  }
  
  if(document.getElementById('lname').value === ''){
    document.getElementById('name_error').innerHTML = '* Please Enter Your Last Name!';
    window.location.href = '#name_error';
    window.scrollTo(window.scrollX, window.scrollY - 100);
    return;
  }
  
  if(document.getElementById('address').value === ''){
    document.getElementById('address_error').innerHTML = '* Please Enter Your Street Address!';
    window.location.href = '#address_error';
    window.scrollTo(window.scrollX, window.scrollY - 100);
    return;
  }
  
  if(document.getElementById('city').value === ''){
    document.getElementById('address_error').innerHTML = '* Please Enter Your City!';
    window.location.href = '#address_error';
    window.scrollTo(window.scrollX, window.scrollY - 100);
    return;
  }
  
  if(document.getElementById('zip').value === ''){
    document.getElementById('address_error').innerHTML = '* Please Enter Your Zip Code!';
    window.location.href = '#address_error';
    window.scrollTo(window.scrollX, window.scrollY - 100);
    return;
  }
  
  if(document.getElementById('lot_size').value === ''){
    document.getElementById('address_error').innerHTML = '* Please Select You Lot Size!';
    window.location.href = '#address_error';
    window.scrollTo(window.scrollX, window.scrollY - 100);
    return;
  }
  
  if(document.getElementById('day_phone').value === ''){
    document.getElementById('contact_error').innerHTML = '* Please Enter Your Daytime Phone Number!';
    window.location.href = '#contact_error';
    window.scrollTo(window.scrollX, window.scrollY - 100);
    return;
  }
  
  /*if(document.getElementById('night_phone').value === ''){
    document.getElementById('contact_error').innerHTML = '* Please Enter Your Evening Phone Number!';
    window.location.href = '#contact_error';
    window.scrollTo(window.scrollX, window.scrollY - 100);
    return;
  }*/
  
  if(document.getElementById('email').value === ''){
    document.getElementById('contact_error').innerHTML = '* Please Enter Your Email Address!';
    window.location.href = '#contact_error';
    window.scrollTo(window.scrollX, window.scrollY - 100);
    return;
  }
  
  if(document.getElementById('vemail').value === ''){
    document.getElementById('contact_error').innerHTML = '* Please Enter Your Email Address again for verification!';
    window.location.href = '#contact_error';
    window.scrollTo(window.scrollX, window.scrollY - 100);
    return;
  }
  
  if(document.getElementById('email').value !== document.getElementById('vemail').value){
    document.getElementById('contact_error').innerHTML = '* The Email Addresses Entered Do Not Match!';
    window.location.href = '#contact_error';
    window.scrollTo(window.scrollX, window.scrollY - 100);
    return;
  }
  
  if(document.getElementById('aeration').checked === false && document.getElementById('overseeding').checked === false && document.getElementById('double_aeration').checked === false && document.getElementById('double_overseeding').checked === false && document.getElementById('fertilizer').checked === false){
    document.getElementById('work_error').innerHTML = '* You Must Select at Least 1 Service to Perform!';
    window.location.href = '#work_error';
    window.scrollTo(window.scrollX, window.scrollY - 100);
    return;
  }
  var q_trip = false;
  if(!$("input[name='prop_maintain']:checked").val()) {
    document.getElementById('question_error').innerHTML = '* Please Answer ALL of the Questions in This Section!';
    window.location.href = '#question_error';
    window.scrollTo(window.scrollX, window.scrollY - 100);
    return;
  }else if($("#prop_maintain_yes").is(':checked')){
    q_trip = true;
  }
  
  if(!$("input[name='prop_identify']:checked").val()) {
    document.getElementById('question_error').innerHTML = '* Please Answer ALL of the Questions in This Section!';
    window.location.href = '#question_error';
    window.scrollTo(window.scrollX, window.scrollY - 100);
    return;
  }else if($("#prop_identify_yes").is(':checked')){
    q_trip = true;
  }
  
  if(!$("input[name='prop_unique']:checked").val()) {
    document.getElementById('question_error').innerHTML = '* Please Answer ALL of the Questions in This Section!';
    window.location.href = '#question_error';
    window.scrollTo(window.scrollX, window.scrollY - 100);
    return;
  }else if($("#prop_unique_yes").is(':checked')){
    q_trip = true;
  }
  
  if(!$("input[name='prop_gate']:checked").val()) {
    document.getElementById('question_error').innerHTML = '* Please Answer ALL of the Questions in This Section!';
    window.location.href = '#question_error';
    window.scrollTo(window.scrollX, window.scrollY - 100);
    return;
  }else if($("#prop_gate_yes").is(':checked')){
    q_trip = true;
  }
  
  if(!$("input[name='prop_sprinkler']:checked").val()) {
    document.getElementById('question_error').innerHTML = '* Please Answer ALL of the Questions in This Section!';
    window.location.href = '#question_error';
    window.scrollTo(window.scrollX, window.scrollY - 100);
    return;
  }else if($("#prop_sprinkler_yes").is(':checked')){
    q_trip = true;
  }
  
  if(!$("input[name='prop_fence']:checked").val()) {
    document.getElementById('question_error').innerHTML = '* Please Answer ALL of the Questions in This Section!';
    window.location.href = '#question_error';
    window.scrollTo(window.scrollX, window.scrollY - 100);
    return;
  }else if($("#prop_fence_yes").is(':checked')){
    q_trip = true;
  }
  
  if(document.getElementById('comments').value === '' && q_trip === true){
    document.getElementById('comments_terms_error').innerHTML = '* Please Enter Comments Regarding the questions above that were answered YES!';
    window.location.href = '#comments_terms_error';
    window.scrollTo(window.scrollX, window.scrollY - 100);
    return;
  }
  
  /*if(document.getElementById('terms_cb').checked === false){
    document.getElementById('comments_terms_error').innerHTML = '* Please Check the Box to Accept the Terms and Conditions!';
    window.location.href = '#comments_terms_error';
    window.scrollTo(window.scrollX, window.scrollY - 100);
    return;
  }*/
  
  //Submit the form...
  document.getElementById('portal_signup_form').submit();
}



function load_form(mode,cid){
  document.getElementById('portal_signup_form').reset();
  document.getElementById('zillow_ls').innerHTML = '';
  document.getElementById('zillow_ls').setAttribute('href','');
  
  if(mode === 'Edit'){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          var r = JSON.parse(this.responseText);
          
          if(r.cust_type === 'New'){
            document.getElementById('cust_type_new').checked = true;
          }else{
            document.getElementById('cust_type_return').checked = true;
          }
          document.getElementById('fname').value = r.fname;
          document.getElementById('lname').value = r.lname;
          document.getElementById('address').value = r.address;
          document.getElementById('address2').value = r.address2;
          document.getElementById('city').value = r.city;
          document.getElementById('zip').value = r.zip;
          document.getElementById('county').value = r.county;
          document.getElementById('lot_size').value = r.lot_size;
          //Add Zillow Lot Size...
          var linkText = document.createTextNode("[Zillow: "+r.zillow_ls+"]");
          document.getElementById('zillow_ls').appendChild(linkText);
          document.getElementById('zillow_ls').setAttribute('href',r.zillow_link);
          document.getElementById('day_phone').value = r.day_phone;
          document.getElementById('ext').value = r.ext;
          document.getElementById('night_phone').value = r.night_phone;
          document.getElementById('email').value = r.email;
          document.getElementById('vemail').value = r.email;
          
          if(r.aeration === 'on'){
            document.getElementById('aeration').checked = true;
          }
          if(r.overseeding === 'on'){
            document.getElementById('overseeding').checked = true;
          }
          if(r.double_aeration === 'on'){
            document.getElementById('double_aeration').checked = true;
          }
          if(r.double_overseeding === 'on'){
            document.getElementById('double_overseeding').checked = true;
          }
          if(r.fertilizer === 'on'){
            document.getElementById('fertilizer').checked = true;
          }
          
          if(r.prop_maintain === 'Yes'){
            document.getElementById('prop_maintain_yes').checked = true;
          }else{
            document.getElementById('prop_maintain_no').checked = true;
          }
          
          if(r.prop_identify === 'Yes'){
            document.getElementById('prop_identify_yes').checked = true;
          }else{
            document.getElementById('prop_identify_no').checked = true;
          }
          
          if(r.prop_unique === 'Yes'){
            document.getElementById('prop_unique_yes').checked = true;
          }else{
            document.getElementById('prop_unique_no').checked = true;
          }
          
          if(r.prop_gate === 'Yes'){
            document.getElementById('prop_gate_yes').checked = true;
          }else{
            document.getElementById('prop_gate_no').checked = true;
          }
          
          if(r.prop_sprinkler === 'Yes'){
            document.getElementById('prop_sprinkler_yes').checked = true;
          }else{
            document.getElementById('prop_sprinkler_no').checked = true;
          }
          
          if(r.prop_fence === 'Yes'){
            document.getElementById('prop_fence_yes').checked = true;
          }else{
            document.getElementById('prop_fence_no').checked = true;
          }
          
          document.getElementById('comments').value = r.comments;
          document.getElementById('special_requests').value = r.special_requests;
          document.getElementById('internal_comments').value = r.internal_comments;
          document.getElementById('serviced_date').value = r.serviced_date;
          document.getElementById('invoiced_date').value = r.invoiced_date;
          document.getElementById('form_cid').value = r.ID;
          console.log('Customer '+r.ID+' Loaded Successfully...');
          
        }
    };
    xhttp.open("GET", "customers/php/fetch-customer.php?cid="+cid, true);
    xhttp.send();
  }
  document.getElementById('form_mode').value = mode;
}


function remove_customer(cid,e){
  var conf = confirm("Are you sure you want to remove this customer?");
  if(conf === false){
    return;
  }
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
         alert(xhttp.responseText);
         e.parentElement.parentElement.remove();
      }
  };
  xhttp.open("GET", "customers/php/remove-customer.php?cid="+cid, true);
  xhttp.send();
}


function restore_customer(cid,e){
  var conf = confirm("Are you sure you want to restore this customer?");
  if(conf === false){
    return;
  }
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
         alert(xhttp.responseText);
         e.parentElement.parentElement.remove();
         window.location.reload();
      }
  };
  xhttp.open("GET", "customers/php/restore-customer.php?cid="+cid, true);
  xhttp.send();
}