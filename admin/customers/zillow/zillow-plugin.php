<?php
$config = require 'customers/zillow/config.php';
//1/4 Acre is 10890sqft...
$acre = 43560;
if($r['zillow_lot_size'] == ''){
        echo '<script>
                console.log("' . $r['ID'] . '");
              </script>';
				//$zillowURL = 'https://www.zillow.com/webservice/GetDeepSearchResults.htm?zws-id=X1-ZWz17p4gr0dnnv_38l6u&address=' . str_replace(' ','+',$r['address']) . '&citystatezip=' . str_replace(' ','+',$r['city']) . '%2C+' . $r['state'] . '+' . $r['zip'];
				$zillowURL = $config['endpoint_url'] . '?access_token=' . $config['access_token'] . '&address.full=' . str_replace(' ','+',$r['address']) . '+' . str_replace(' ','+',$r['city']) . '%2C+' . $r['state'] . '+' . $r['zip'];
        //echo $zillowURL . '<br><br>';
				$search = file_get_contents($zillowURL);
        $zillowData = json_decode($search);
        //$zillowData = json_encode($zillowData);
        //var_dump($zillowData);
        $zlls = $zillowData->bundle[0]->lotSizeAcres;
        //echo $zlls;
  
				
				if($zillowData->success == true && count($zillowData->bundle) > 0){
					$zillowURL2 = $zillowURL;
					echo round($zlls,2) . ' Acres - ';
					echo '<script>
                console.log("Recording Zillow...");
                record_zillow(' . $r['ID'] . ',\'' . round($zlls,2) . '\',\'' . $zillowURL2 . '\');
               </script>';
				}else if($zillowData->success == true && count($zillowData->bundle) <= 0){
					echo 'No Result - ';
					$zillowURL2 = 'http://zillow.com';
					$zlls = 0;
					//echo $zillowURL;
				}else{
					echo 'ERROR! - ';
					echo $xml->message[0]->code;
					$zillowURL2 = 'http://zillow.com';
					$zlls = 0;
					//echo $zillowURL;
				}
}else{
  echo '<script>
          console.log("Stored Zillow Lot Size Value Found...");
        </script>';
	$zlls = $r['zillow_lot_size'];
	echo round($zlls,2) . ' - ';
	$zillowURL2 = $r['zillow_link'];
}

                        
//Flag Lot Size that is off...
$quarter = 10890;
$third = 14520;
switch($r['lot_size']) {
  case '1':// 1/4 Acre
		$max_ls = 0.29;
		$c_ls = round($zlls,2);
    if($c_ls > $max_ls){echo '<a href="' . $zillowURL2 . '" target="_blank"><i class="zmdi zmdi-flag" style="color:red;font-size:24px;font-weight:bold;text-align:center;"></i></a>';}else{echo '<i class="zmdi zmdi-check" style="color:green;font-size:24px;font-weight:bold;text-align:center;"></i>';}
    break;
  case '2':// 1/3 Acre
		$min_ls = 0.30;
		$max_ls = 0.44;
		$c_ls = round($zlls,2);
    if($c_ls < $min_ls || $c_ls > $max_ls){echo '<a href="' . $zillowURL2 . '" target="_blank"><i class="zmdi zmdi-flag" style="color:red;font-size:24px;font-weight:bold;text-align:center;"></i></a>';}else{echo '<i class="zmdi zmdi-check" style="color:green;font-size:24px;font-weight:bold;text-align:center;"></i>';}
    break;
  case '3':// 1/2 Acre
    $min_ls = 0.45;
		$max_ls = 0.59;
		$c_ls = round($zlls,2);
    if($c_ls < $min_ls || $c_ls > $max_ls){echo '<a href="' . $zillowURL2 . '" target="_blank"><i class="zmdi zmdi-flag" style="color:red;font-size:24px;font-weight:bold;text-align:center;"></i></a>';}else{echo '<i class="zmdi zmdi-check" style="color:green;font-size:24px;font-weight:bold;text-align:center;"></i>';}
    break;
  case '4':// 2/3 Acre
    $min_ls = .60;
		$max_ls = .72;
		$c_ls = round($zlls,2);
    if($c_ls < $min_ls || $c_ls > $max_ls){echo '<a href="' . $zillowURL2 . '" target="_blank"><i class="zmdi zmdi-flag" style="color:red;font-size:24px;font-weight:bold;text-align:center;"></i></a>';}else{echo '<i class="zmdi zmdi-check" style="color:green;font-size:24px;font-weight:bold;text-align:center;"></i>';}
    break;
  case '5':// 3/4 Acre
    $min_ls = .73;
		$max_ls = .85;
		$c_ls = round($zlls,2);
    if($c_ls < $min_ls || $c_ls > $max_ls){echo '<a href="' . $zillowURL2 . '" target="_blank"><i class="zmdi zmdi-flag" style="color:red;font-size:24px;font-weight:bold;text-align:center;"></i></a>';}else{echo '<i class="zmdi zmdi-check" style="color:green;font-size:24px;font-weight:bold;text-align:center;"></i>';}
    break;
  case '6':// 1 Acre
    $min_ls = .86;
		$max_ls = 1.1;
		$c_ls = round($zlls,2);
    if($c_ls < $min_ls || $c_ls > $max_ls){echo '<a href="' . $zillowURL2 . '" target="_blank"><i class="zmdi zmdi-flag" style="color:red;font-size:24px;font-weight:bold;text-align:center;"></i></a>';}else{echo '<i class="zmdi zmdi-check" style="color:green;font-size:24px;font-weight:bold;text-align:center;"></i>';}
    break;
  case '7':// 2+ Acre
    $min_ls = 1.1;
		$c_ls = round($zlls,2);
    if($c_ls <= $min_ls){echo '<a href="' . $zillowURL2 . '" target="_blank"><i class="zmdi zmdi-flag" style="color:red;font-size:24px;font-weight:bold;text-align:center;"></i></a>';}else{echo '<i class="zmdi zmdi-check" style="color:green;font-size:24px;font-weight:bold;text-align:center;"></i>';}
    break;
  default:
    $lot_size = 'LOT SIZE ERROR!!!!';
}
echo '<br><a href="Javascript:clear_zillow(' . $r['ID'] . ');"><small style="font-size:8px;">[Refresh Data]</small></a>';		


					