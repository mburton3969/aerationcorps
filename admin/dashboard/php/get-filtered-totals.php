<?php
include '../../../global/php/connection.php';
error_reporting(0);

//Load Variables...
$sdate = date("Y-m-d", strtotime($_GET['sdate']));
$edate = date("Y-m-d", strtotime($_GET['edate']));

//Get Results...
$tq = "SELECT * FROM `customers` WHERE `inactive` != 'Yes' AND `date` >= '" . $sdate . "' AND `date` <= '" . $edate . "'";
$tg = mysqli_query($conn, $tq) or die($conn->error);
$total = mysqli_num_rows($tg);
$x->total = $total;

$q = "SELECT DISTINCT `zip` FROM `customers` WHERE `inactive` != 'Yes' AND `date` >= '" . $sdate . "' AND `date` <= '" . $edate . "'";
$g = mysqli_query($conn, $q) or die($conn->error);

$i = 0;
while($r = mysqli_fetch_array($g)){
  $zq = "SELECT * FROM `customers` WHERE `inactive` != 'Yes' AND `zip` = '" . $r['zip'] . "' AND `date` >= '" . $sdate . "' AND `date` <= '" . $edate . "'";
  $zg = mysqli_query($conn, $zq) or die($conn->error);
  $ztotal = mysqli_num_rows($zg);
  
  $x->zip[$i]->zip_code = $r['zip'];
  $x->zip[$i]->ztotal = $ztotal;
  $i++;
}


$response = json_encode($x);
echo $response;

?>