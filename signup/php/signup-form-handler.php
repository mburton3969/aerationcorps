<?php
include '../../global/php/connection.php';
//print_r($_POST);

//Load Variables...
$ip = $_SERVER['REMOTE_ADDR'];
$cust_type = $_POST['cust_type'];
$fname = mysqli_real_escape_string($conn, $_POST['fname']);
$lname = mysqli_real_escape_string($conn, $_POST['lname']);
$address = mysqli_real_escape_string($conn, $_POST['address']);
$address2 = mysqli_real_escape_string($conn, $_POST['address2']);
$city = mysqli_real_escape_string($conn, $_POST['city']);
$state = $_POST['state'];
$zip = mysqli_real_escape_string($conn, $_POST['zip']);
$county = $_POST['county'];
$lot_size = $_POST['lot_size'];
$day_phone = mysqli_real_escape_string($conn, $_POST['day_phone']);
$ext = mysqli_real_escape_string($conn, $_POST['ext']);
$night_phone = mysqli_real_escape_string($conn, $_POST['night_phone']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$email_ack = $_POST['email_ack'];
$aeration = $_POST['aeration'];
$overseeding = $_POST['overseeding'];
$double_aeration = $_POST['double_aeration'];
$double_overseeding = $_POST['double_overseeding'];
$fertilizer = $_POST['fertilizer'];
$prop_maintain = $_POST['prop_maintain'];
$prop_identify = $_POST['prop_identify'];
$prop_unique = $_POST['prop_unique'];
$prop_gate = $_POST['prop_gate'];
$comments = mysqli_real_escape_string($conn, $_POST['comments']);
$special_requests = mysqli_real_escape_string($conn, $_POST['special_requests']);
$terms_ack = $_POST['terms_cb'];


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
       `comments`,
       `special_requests`,
       `terms_ack`,
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
       '" . $comments . "',
       '" . $special_requests . "',
       '" . $terms_ack . "',
       'No'
       )";
mysqli_query($conn, $iq) or die('ERROR CODE 28583: ' . $conn->error);


include '../../email/templates/confirm-order-email.php';
// Set Email Display Parameters...
$header = 'From: The Areation Corps <info@theaerationcorps.com>' . "\r\n";
//$header .= "Reply-To: " . $email . "\r\n";
$header .= "Bcc: michael@ignition-innovations.com" . "\r\n";
$header .= 'X-Mailer: PHP/' . phpversion();
$header .= "MIME-Version: 1.0\r\n";
//$header .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
$header .= "Content-Type: text/html; charset=UTF-8\r\n";

$sub = 'TheAerationCorps Service Request Confirmation';
mail($email,$sub,$etemp,$header);


echo '<html>
    <head>
      <link rel="stylesheet" href="http://ignition.church/creation/css/bootstrap.min.css">
    </head>
    <body>
  <div class="jumbotron text-xs-center" style="text-align:center;height:100%;">
  <img src="../../images/acpics/aeration-logo_final.png" style="width:20%;" />
  <h1 class="display-3">Thank You!</h1>
  <p class="lead">Your order was submitted and you should receive an email shortly confirming the details of your order!</p>
  <hr>
  <!--<p>
    Having trouble? <a href="mailto:info@theaerationcorps.com">Contact us</a>
  </p>-->
  <p class="lead">
    <a class="btn btn-primary btn-sm" href="../../index.php" role="button">Continue</a>
  </p>
</div>
</body>
</html>';
?>