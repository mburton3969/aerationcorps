<?php
include '../../../global/php/connection.php';
error_reporting(0);

//Load Variables...
$cid = $_GET['cid'];

//Make Inactive...
$q = "SELECT * FROM `customers` WHERE `ID` = '" . $cid . "'";
$g = mysqli_query($conn, $q) or die($conn->error);
$r = mysqli_fetch_array($g);

$x->ID = $r['ID'];
$x->date = date("m/d/Y", strtotime($r['date']));
$x->ip = $r['ip'];
$x->source = $r['source'];
$x->cust_type = $r['cust_type'];
$x->fname = $r['fname'];
$x->lname = $r['lname'];
$x->address = $r['address'];
$x->address2 = $r['address2'];
$x->city = $r['city'];
$x->state = $r['state'];
$x->zip = $r['zip'];
$x->county = $r['county'];
$x->lot_size = $r['lot_size'];
if($r['zillow_lot_size'] != ''){
  $x->zillow_ls = $r['zillow_lot_size'];
}else{
  $x->zillow_ls = 'No Results';
}
if($r['zillow_link'] != ''){
  $x->zillow_link = $r['zillow_link'];
}else{
  $x->zillow_link = 'http://zillow.com';
}
$x->day_phone = $r['day_phone'];
$x->ext = $r['ext'];
$x->night_phone = $r['night_phone'];
$x->email = $r['email'];
$x->aeration = $r['aeration'];
$x->overseeding = $r['overseeding'];
$x->double_aeration = $r['double_aeration'];
$x->double_overseeding = $r['double_overseeding'];
$x->fertilizer = $r['fertilizer'];
$x->prop_maintain = $r['prop_maintain'];
$x->prop_identify = $r['prop_identify'];
$x->prop_unique = $r['prop_unique'];
$x->prop_gate = $r['prop_gate'];
$x->prop_sprinkler = $r['prop_sprinkler'];
$x->prop_fence = $r['prop_fence'];
$x->comments = $r['comments'];
$x->special_requests = $r['special_requests'];
$x->internal_comments = $r['internal_comments'];
if($r['serviced_date'] == '0000-00-00'){
  $x->serviced_date = '';
}else{
  $x->serviced_date = date("m/d/Y",strtotime($r['serviced_date']));
}
if($r['invoiced_date'] == '0000-00-00'){
  $x->invoiced_date = '';
}else{
  $x->invoiced_date = date("m/d/Y",strtotime($r['invoiced_date']));
}


$response = json_encode($x);
echo $response;

?>