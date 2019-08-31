<?php
include 'connection.php';

//Load Variables...
$ip = $_GET['ip'];
$page = $_GET['page'];

//Log Analytics...
$q = "INSERT INTO `site_analytics`
      (
      `date`,
      `time`,
      `ip`,
      `page`,
      `inactive`
      )
      VALUES
      (
      CURRENT_DATE,
      NOW() + 1,
      '" . $ip . "',
      '" . $page . "',
      'No'
      )";
mysqli_query($conn, $q) or die($conn->error);

echo 'Analytics Logged...';

?>