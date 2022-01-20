<?php

$inputJSON = file_get_contents('php://input');
// echo($inputJSON);
$data2 = rand(100, 999);
$today = date("Ymdhis");
$licenseFrontImageName = time().$data2.".png";
$fp = fopen("upload/".$licenseFrontImageName, "w+");
fwrite($fp, base64_decode($inputJSON));
fclose($fp);
 
 echo('{"name"'.':"'.$licenseFrontImageName.'"}');
?>