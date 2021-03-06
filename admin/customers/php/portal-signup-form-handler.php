<?php
include '../../../global/php/connection.php';
//print_r($_POST);

//Load Variables...
$mode = $_POST['form_mode'];
$cid = $_POST['form_cid'];

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
$prop_sprinkler = $_POST['prop_sprinkler'];
$prop_fence = $_POST['prop_fence'];
$comments = mysqli_real_escape_string($conn, $_POST['comments']);
$special_requests = mysqli_real_escape_string($conn, $_POST['special_requests']);
$terms_ack = $_POST['terms_cb'];
$int_comments = mysqli_real_escape_string($conn, $_POST['internal_comments']);

if($_POST['serviced_date'] == ''){
  $serviced_date = '';
}else{
  $serviced_date = date("Y-m-d",strtotime($_POST['serviced_date']));
}
if($_POST['invoiced_date'] == ''){
  $invoiced_date = '';
}else{
  $invoiced_date = date("Y-m-d",strtotime($_POST['invoiced_date']));
}



if($mode == 'New'){
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
       `internal_comments`,
       `terms_ack`,
       `inactive`
       )
       VALUES
       (
       CURRENT_DATE,
       NOW() + 1,
       '" . $ip . "',
       'Manual Entry',
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
       '" . $int_comments . "',
       '" . $terms_ack . "',
       'No'
       )";
mysqli_query($conn, $iq) or die('ERROR CODE 28583: ' . $conn->error);

echo 'Your form was submitted successfully!';
}

if($mode == 'Edit'){
  $uq = "UPDATE `customers` SET
       `cust_type` = '" . $cust_type . "',
       `fname` = '" . $fname . "',
       `lname` = '" . $lname . "',
       `address` = '" . $address . "',
       `address2` = '" . $address2 . "',
       `city` = '" . $city . "',
       `state` = '" . $state . "',
       `zip` = '" . $zip . "',
       `county` = '" . $county . "',
       `lot_size` = '" . $lot_size . "',
       `day_phone` = '" . $day_phone . "',
       `ext` = '" . $ext . "',
       `night_phone` = '" . $night_phone . "',
       `email` = '" . $email . "',
       `email_ack` = '" . $email_ack . "',
       `aeration` = '" . $aeration . "',
       `overseeding` = '" . $overseeding . "',
       `double_aeration` = '" . $double_aeration . "',
       `double_overseeding` = '" . $double_overseeding . "',
       `fertilizer` = '" . $fertilizer . "',
       `prop_maintain` = '" . $prop_maintain . "',
       `prop_identify` = '" . $prop_identify . "',
       `prop_unique` = '" . $prop_unique . "',
       `prop_gate` = '" . $prop_gate . "',
       `prop_sprinkler` = '" . $prop_sprinkler . "',
       `prop_fence` = '" . $prop_fence . "',
       `comments` = '" . $comments . "',
       `special_requests` = '" . $special_requests . "',
       `internal_comments` = '" . $int_comments . "',
       `terms_ack` = '" . $terms_ack . "',
       `serviced_date` = '" . $serviced_date . "',
       `invoiced_date` = '" . $invoiced_date . "',
       `inactive` = 'No'
       WHERE `ID` = '" . $cid . "'";
  mysqli_query($conn, $uq) or die($conn->error);
  
  echo 'The Customer has been updated!';
}

echo '<script>
        window.location = "../../customers.php";
      </script>';
?>