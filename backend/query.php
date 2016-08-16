<?php
try {
  $us = file_get_contents("https://clientweb-us-east.theculling.net/api");
} catch (Exception $e) {
  $us = false;
}
try {
  $eu = file_get_contents("https://clientweb-eu.theculling.net/api");
} catch (Exception $e) {
  $eu = false;
}
try {
  $ocn = file_get_contents("https://clientweb-ocn.theculling.net/api");
} catch (Exception $e) {
  $ocn = false;
}

$us_status = false;
$eu_status = false;
$ocn_status = false;

if($us != false) {
  $us_json = json_decode($us);
  $us_status = $us_json -> redeemSystemOnline;
}

if($eu != false) {
  $eu_json = json_decode($eu);
  $eu_status = $eu_json -> redeemSystemOnline;
}

if($ocn != false) {
  $ocn_json = json_decode($ocn);
  $ocn_status = $ocn_json -> redeemSystemOnline;
}

$out_arr = array(
  "us" => $us_status,
  "eu" => $eu_status,
  "ocn" => $ocn_status
);

echo json_encode($out_arr);

 ?>
