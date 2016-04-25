<?php

$source = "http://localhost//consultants-f/devcraft/uploads/sponsor_information.pdf";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $source);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSLVERSION,3);
$data = curl_exec ($ch);
$error = curl_error($ch);
curl_close ($ch);

$destination = "downloads/sponsor_information.pdf";
$file = fopen($destination, "w+");
fputs($file, $data);
fclose($file);
