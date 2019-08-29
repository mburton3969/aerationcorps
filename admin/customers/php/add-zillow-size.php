<?php
include '../../../global/php/connection.php';

//Load Variables...
$cid = $_POST['cid'];
$ls = $_POST['ls'];
$link = mysqli_real_escape_string($conn, $_POST['link']);

//Add Lot Size...
$q = "UPDATE `customers` SET `zillow_lot_size` = '" . $ls . "', `zillow_link` = '" . $link . "' WHERE `ID` = '" . $cid . "'";
mysqli_query($conn, $q) or die($conn->error);

echo 'Lot Size Recorded for CID: ' . $cid;

?>