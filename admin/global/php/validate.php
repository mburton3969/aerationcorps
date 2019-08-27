<?php
error_reporting(E_ALL);
include '../../../global/php/connection.php';

//Load Variables...
$user = $_POST['username'];
$pass = $_POST['password'];

//Validate User...
$q = "SELECT * FROM `users` WHERE `inactive` != 'Yes' AND `username` = '" . $user . "' AND `password` = '" . $pass . "'";
$g = mysqli_query($conn, $q) or die($conn->error);
if(mysqli_num_rows($g) > 0){
  $r = mysqli_fetch_array($g);
  
  //Setup Session Variables...
  $_SESSION['in'] = 'Yes';
  $_SESSION['fname'] = $r['fname'];
  $_SESSION['lname'] = $r['lname'];
  $_SESSION['full_name'] = $r['fname'] . ' ' . $r['lname'];
  $_SESSION['user_id'] = $r['ID'];
  $_SESSION['role'] = $r['role'];
  
  echo '<script>
          window.location = "../../dashboard.php";
        </script>';
}else{
  echo '<script>
          window.location = "../../index.php?r=*Invalid Username/Password";
        </script>';
}
?>