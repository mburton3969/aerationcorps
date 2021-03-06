<?php
include '../../global/php/connection.php';

//Load Variables...
$ip = mysqli_real_escape_string($conn, $_SERVER['REMOTE_ADDR']);
$cust_type = mysqli_real_escape_string($conn, $_POST['cust_type']);
$fname = mysqli_real_escape_string($conn, $_POST['fname']);
$lname = mysqli_real_escape_string($conn, $_POST['lname']);
$address = mysqli_real_escape_string($conn, $_POST['address']);
$address2 = mysqli_real_escape_string($conn, $_POST['address2']);
$city = mysqli_real_escape_string($conn, $_POST['city']);
$state = mysqli_real_escape_string($conn, $_POST['state']);
$zip = mysqli_real_escape_string($conn, $_POST['zip']);
$county = mysqli_real_escape_string($conn, $_POST['county']);
$lot_size = mysqli_real_escape_string($conn, $_POST['lot_size']);
$day_phone = mysqli_real_escape_string($conn, $_POST['day_phone']);
$ext = mysqli_real_escape_string($conn, $_POST['ext']);
$night_phone = mysqli_real_escape_string($conn, $_POST['night_phone']);
$remail = mysqli_real_escape_string($conn, $_POST['email']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$email_ack = mysqli_real_escape_string($conn, $_POST['email_ack']);
$aeration = mysqli_real_escape_string($conn, $_POST['aeration']);
$overseeding = mysqli_real_escape_string($conn, $_POST['overseeding']);
$double_aeration = mysqli_real_escape_string($conn, $_POST['double_aeration']);
$double_overseeding = mysqli_real_escape_string($conn, $_POST['double_overseeding']);
$fertilizer = mysqli_real_escape_string($conn, $_POST['fertilizer']);
$prop_maintain = mysqli_real_escape_string($conn, $_POST['prop_maintain']);
$prop_identify = mysqli_real_escape_string($conn, $_POST['prop_identify']);
$prop_unique = mysqli_real_escape_string($conn, $_POST['prop_unique']);
$prop_gate = mysqli_real_escape_string($conn, $_POST['prop_gate']);
$prop_sprinkler = mysqli_real_escape_string($conn, $_POST['prop_sprinkler']);
$prop_fence = mysqli_real_escape_string($conn, $_POST['prop_fence']);
$comments = mysqli_real_escape_string($conn, $_POST['comments']);
$special_requests = mysqli_real_escape_string($conn, $_POST['special_requests']);
$terms_ack = $_POST['terms_cb'];
if($_POST['atc'] != ''){
  $ad_code = mysqli_real_escape_string($conn,$_POST['atc']);
  $ad_raw = explode('_',$ad_code);
  $ad_source = $ad_raw[0];
  $ad_number = $ad_raw[1];
}

$captcha_code = $_POST['g-recaptcha-response'];
$valid_captcha = 'Yes';
$inactive = 'No';
if($captcha_code == ''){
  $valid_captcha = 'No';
  $inactive = 'Yes';
}

//INSERT Customer...
$iq = "INSERT INTO `customers`
       (
       `date`,
       `time`,
       `ip`,
       `source`,
       `cust_type`,
       `fname`,
       `lname`,
       `address`,
       `address2`,
       `city`,
       `state`,
       `zip`,
       `county`,
       `lot_size`,
       `day_phone`,
       `ext`,
       `night_phone`,
       `email`,
       `email_ack`,
       `aeration`,
       `overseeding`,
       `double_aeration`,
       `double_overseeding`,
       `fertilizer`,
       `prop_maintain`,
       `prop_identify`,
       `prop_unique`,
       `prop_gate`,
       `prop_sprinkler`,
       `prop_fence`,
       `comments`,
       `special_requests`,
       `terms_ack`,
       `ad_code`,
       `ad_source`,
       `ad_number`,
       `captcha_code`,
       `valid_captcha`,
       `inactive`
       )
       VALUES
       (
       CURRENT_DATE,
       NOW() + 1,
       '" . $ip . "',
       'Customer',
       '" . $cust_type . "',
       '" . $fname . "',
       '" . $lname . "',
       '" . $address . "',
       '" . $address2 . "',
       '" . $city . "',
       '" . $state . "',
       '" . $zip . "',
       '" . $county . "',
       '" . $lot_size . "',
       '" . $day_phone . "',
       '" . $ext . "',
       '" . $night_phone . "',
       '" . $email . "',
       '" . $email_ack . "',
       '" . $aeration . "',
       '" . $overseeding . "',
       '" . $double_aeration . "',
       '" . $double_overseeding . "',
       '" . $fertilizer . "',
       '" . $prop_maintain . "',
       '" . $prop_identify . "',
       '" . $prop_unique . "',
       '" . $prop_gate . "',
       '" . $prop_sprinkler . "',
       '" . $prop_fence . "',
       '" . $comments . "',
       '" . $special_requests . "',
       '" . $terms_ack . "',
       '" . $ad_code . "',
       '" . $ad_source . "',
       '" . $ad_number . "',
       '" . $captcha_code . "',
       '" . $valid_captcha . "',
       '" . $inactive . "'
       )";
mysqli_query($conn, $iq) or die('ERROR CODE 28583: ' . $conn->error);

// Set Email Template...
include '../../email/templates/confirm-order-email.php';
// Set Email Parameters...
include '../../email/phpmailer/PHPMailerAutoload.php';
$mail = new PHPMailer;
include '../../email/phpmailsettings.php';

$mail->setFrom("service@theaerationcorps.com","Aeration Service");
$mail->addAddress($remail);
if($special_requests != ''){
  $mail->addCC("service@theaerationcorps.com");
}
$mail->addBCC("archive@ignition-innovations.com");
$mail->Subject = 'TheAerationCorps Service Request Confirmation';
$mail->Body = $etemp;
if($valid_captcha == 'Yes'){
  $mail->send();
}

echo '<html>
    <head>
      <link rel="stylesheet" href="../css/bootstrap.min.css">
      <!-- Global site tag (gtag.js) - Google Ads: 658269236 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-658269236"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag("js", new Date());

  gtag("config", "AW-658269236");
</script>

<script>
  gtag("event", "conversion", {"send_to": "AW-658269236/jDYpCL3su8oBELTI8bkC"});
</script>


<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version="2.0";
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,"script",
  "https://connect.facebook.net/en_US/fbevents.js");
  fbq("init", "142962720369739");
  fbq("track", "PageView");
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=142962720369739&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code --> 

    </head>
    <body>
    <script>
  fbq("track", "CompleteRegistration", {
    value: 1,
    currency: "usd",
  });
</script>
  <div class="jumbotron text-xs-center" style="text-align:center;height:100%;">
  <img src="../../images/acpics/aeration-logo_final.png" style="width:20%;" />
  <h1 class="display-3">Thank you for your order!</h1>
  <p class="lead">
    We will contact you two days prior to your scheduled service and invoice after the work has been performed. 
  </p>
  <p class="lead">
    You should receive a confirmation email shortly. If you don&apos;t, please check your junk email folder <br> and designate our emails as &quot;not junk&quot; to ensure you receive future notifications from us.
  </p>
  <hr>
  <!--<p>
    Having trouble? <a href="mailto:info@theaerationcorps.com">Contact us</a>
  </p>-->
  <p class="lead">
    <a class="btn btn-primary btn-sm" href="../../index.php" role="button">Continue</a>
  </p>
</div>
</body>
<script>
  localStorage.removeItem("ad_code");
</script>
</html>';
?>