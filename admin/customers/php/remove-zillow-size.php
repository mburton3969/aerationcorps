<?php
include '../../../global/php/connection.php';

//Load Variables...
$cid = $_POST['cid'];

//Add Lot Size...
$q = "UPDATE `customers` SET `zillow_lot_size` = '', `zillow_link` = '' WHERE `ID` = '" . $cid . "'";
mysqli_query($conn, $q) or die($conn->error);

echo 'Lot Size Cleared for CID: ' . $cid;

?>