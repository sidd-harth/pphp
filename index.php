<?php 
$url="https://reqres.in/api/users/1";

$client=curl_init($url);

curl_setopt($client,CURLOPT_RETURNTRANSFER,1);
$response=curl_exec($client);

echo $response;
?>
