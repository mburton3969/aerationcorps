<?php
include '../../../global/php/connection.php';

//Load Variables...
$cid = $_GET['cid'];

//Make Inactive...
$q = "UPDATE `customers` SET `inactive` = 'No' WHERE `ID` = '" . $cid . "'";
mysqli_query($conn, $q) or die($conn->error);

echo 'Customer was Restored!';
?>