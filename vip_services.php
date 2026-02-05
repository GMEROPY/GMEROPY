<?php
$api_id = "TKN2wpOC";
$api_key = "smlpDsFJa40ozyJKX8g62Np6idkvb3f2GBwWsrSNCT11jfCJBLygrkPP7vr3eta6";

$data = [
  "api_id" => $api_id,
  "api_key" => $api_key,
  "type" => "services"
];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://vip-reseller.co.id/api/prepaid");
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($ch);
curl_close($ch);

echo $result;