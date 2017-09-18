<?php
header("Accept: application/json");
header("Authorization: Bearer ec59caf9f2e8e6e4ec2eea644b897873");
header("Content-type: application/json");
header("Host: edge.qiwi.com");

$curl = curl_init();
    curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => '/payment-history/v1/persons/79283224437/payments?rows=10&operation=OUT&sources[0]=QW_RUB&sources[1]=CARD HTTP/1.1'
  ));
$resp = curl_exec($curl);
curl_close($curl);

function Request($url, $post)
	{
	$ch=curl_init();
	$result=curl_exec();
	return $result;
	}
?>
