<?php
require_once "sdk/ApiClient.php";

$client = new ApiClient("YOUR_ACCESS_KEY", "YOUR_SECRET_KEY");
$url = "https://api.crawler.club/phone";
$data = array("number"=>"13702032331",);
$response = $client->request($url, $data);
print($response);
