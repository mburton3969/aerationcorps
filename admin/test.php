<?php

$search = file_get_contents('https://www.zillow.com/webservice/GetDeepSearchResults.htm?zws-id=X1-ZWz17p4gr0dnnv_38l6u&address=605+Hillside+Ave&citystatezip=Wilmington%2C+DE');

print_r($search);
echo '<br><br><br>';

$xml = simplexml_load_string($search) or die("Error: Cannot create object");
print_r($xml);
echo '<br><br><br>';

//print_r($xml->response[0]->results[0]->result[0]->lotSizeSqFt);
echo 'Lot Size: ' . $xml->response[0]->results[0]->result[0]->lotSizeSqFt . 'SqFt';

?>