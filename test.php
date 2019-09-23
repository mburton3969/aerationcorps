<?php
print_r($_POST);
if($_POST['g-recaptcha-response'] == ''){
  echo 'SUCCESS!';
}
?>
<html>
  <head>
    <title>reCAPTCHA demo: Simple page</title>
     <script src="https://www.google.com/recaptcha/api.js" async defer></script>
     <script>
       function onSubmit(token) {
         //alert(token);
         document.getElementById("demo-form").submit();
         
       }
     </script>
  </head>
  <body>
    <form id='demo-form' action="?" method="POST">
      <button class="g-recaptcha" data-sitekey="6LfOUbkUAAAAAIHdijdnmFdUiDKH3mY4Cbinh7wO" data-callback='onSubmit'>Submit</button>
      <br/>
    </form>
  </body>
</html>