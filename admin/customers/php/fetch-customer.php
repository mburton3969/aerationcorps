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
$x->comments = $r['comments'];
$x->internal_comments = $r['internal_comments'];
$x->serviced_date = date("m/d/Y",strtotime($r['serviced_date']));
$x->invoiced_date = date("m/d/Y",strtotime($r['invoiced_date']));

$response = json_encode($x);
echo $response;

?>