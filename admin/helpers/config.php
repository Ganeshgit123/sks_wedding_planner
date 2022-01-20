<?php

define('DB_HOST','localhost');
define('DB_USER','uz4uez3tpjtcs');
define('DB_PASS','wfea0w0pxo4b');
define('DB_NAME','dbkcomzj2fbx3n');
 
date_default_timezone_set("Asia/kolkata");
//include_once 'D:/xampp/htdocs/vtlapp/process/dao.php';

 include_once '/home/u201-ha2zv0prnbpt/www/liastaging.com/public_html/sks/admin/process/dao.php';

$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
//echo "connection".$conn ;
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  // echo date('d-m-y h:i:s A');
  wh_log(date('d-m-y h:i:s A')." ".mysqli_connect_error());
  exit();
} 
//$conn = @mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);