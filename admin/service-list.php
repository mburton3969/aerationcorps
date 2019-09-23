<?php
include '../global/php/connection.php';
?>
<html>

<head>
  <title>Service Report</title>
  <link href="service/css/style.css" rel="stylesheet" />
</head>

<body>

  <table border="0" width=740>
    <tr>
      <td class=header align=left>The Aeration Corps Customer Service Report</td>
      <td width=50></td>
      <td align=right class=header><?php date("m/d/Y"); ?></td>
    </tr>
  </table>

  <table width=740>
    <tbody>
      <?php 
      $zq = "SELECT DISTINCT `zip` FROM `customers` WHERE `inactive` != 'Yes' AND `serviced_date` = '0000-00-00' ORDER BY `zip` ASC";
      $zg = mysqli_query($conn, $zq) or die($conn->error);
      while($zr = mysqli_fetch_array($zg)){
        echo '<tr>
              <td height="10"></td>
            </tr>
            <tr>
              <td height="10"></td>
            </tr>
              <tr>
                <td colspan="7" class="admintitle">' . $zr['zip'] . '</td>
              </tr>
              <tr>
              </tr>
              <tr class="border">
                <td colspan="7" height="1"></td>
              </tr>';
        $cq = "SELECT * FROM `customers` WHERE `inactive` != 'Yes' AND `serviced_date` = '0000-00-00' AND `zip` = '" . $zr['zip'] . "' ORDER BY `address` ASC";
        $cg = mysqli_query($conn, $cq) or die($conn->error);
        while($cr = mysqli_fetch_array($cg)){
          echo '<tr>
        <td class="header">' . ucwords($cr['fname'] . ' ' . $cr['lname']) . '</td>
        <td>Added: ' . date("m/d/Y", strtotime($cr['date'])) . '</td>
        <td>' . $cr['address'] . ' ' . $cr['address2'] . '</td>
        <td>' . $cr['city'] . '</td>
        <td>' . $cr['zip'] . '</td>
        <td class="header">';
          if($cr['double_aeration'] == 'on'){
            echo 'DA';
          }elseif($cr['aeration'] == 'on'){
            echo 'A';
          }
  echo '</td>
        <td class="header">';
          if($cr['double_overseeding'] == 'on'){
            echo 'DO';
          }elseif($cr['overseeding'] == 'on'){
            echo 'O';
          }
  echo '</td>
      </tr>
      <tr>
        <td colspan="2">Lot Size:&nbsp;&nbsp;';
          switch($cr['lot_size']) {
            case '1':
              $lot_size = 'Up to 1/4 Acre';
              break;
            case '2':
              $lot_size = '1/3 Acre';
              break;
            case '3':
              $lot_size = '1/2 Acre';
              break;
            case '4':
              $lot_size = '2/3 Acre';
              break;
            case '5':
              $lot_size = '3/4 Acre';
              break;
            case '6':
              $lot_size = '1 Acre';
              break;
            case '7':
              $lot_size = '2 or More Acres';
              break;
            default:
              $lot_size = 'LOT SIZE ERROR!!!!';
          }
       echo $lot_size . ' <b>[Zillow: ';
          if($cr['zillow_lot_size'] != ''){
            echo $cr['zillow_lot_size'] . ' Acre';
          }else{
            echo 'No Results';
          }
          echo ']</b>
            </td>
        <td colspan="1">' . $cr['email'] . '</td>
        <td colspan="3">';
          if($cr['day_phone'] != ''){
            echo 'Day: ' . $cr['day_phone'] . '&nbsp;&nbsp;';
          }
          if($cr['night_phone'] != ''){
            echo 'Eve: ' . $cr['night_phone'];
          }
  echo '</td>
        <td class="header">';
          if($cr['fertilizer'] == 'on'){
            echo 'F';
          }
  echo '</td>
      </tr>
      <tr>
        <td colspan="7">
        </td>
      </tr>
      <tr>
        <td colspan="7">';
          if($cr['cust_type'] == 'New'){
            $ct = '<u>New</u> Customer';
          }else{
            $ct = 'Old Customer';
          }
          if($cr['prop_gate'] === 'Yes'){
            $gated = '<b>[Gated Community]</b>';
          }else{
            $gated = '';
          }
          if($cr['prop_sprinkler'] == 'Yes'){
            $sprinkler = '<b style="color:red;">[Sprinkler System]</b>';
          }else{
            $sprinkler = '';
          }
          if($cr['prop_fence'] == 'Yes'){
            $fence = '<b style="color:red;">[Invisible Dog Fence]</b>';
          }else{
            $fence = '';
          }
          echo $ct . '&nbsp;&nbsp;&nbsp;&nbsp;Customer States:&nbsp;&nbsp;' . $gated . '&nbsp;&nbsp;' . $cr['comments'] . '. <b>Internal Notes</b>: ' . $sprinkler . ' ' . $fence . ' ' . $cr['internal_comments'] . '</td>
      </tr>
      <tr>
        <td height="10"></td>
      </tr>
      <tr>
        <td height="10"></td>
      </tr>';
        }
      }
      
?>
    </tbody>
  </table>


</body>

</html>