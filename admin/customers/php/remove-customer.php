<?php
include '../../../global/php/connection.php';

//Load Variables...
$cid = $_GET['cid'];

//Make Inactive...
$q = "UPDATE `customers` SET `inactive` = 'Yes' WHERE `ID` = '" . $cid . "'";
mysqli_query($conn, $q) or die($conn->error);

echo 'Customer was Removed!';
?>