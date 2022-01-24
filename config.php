<?php

define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','sks');
 
date_default_timezone_set("Asia/kolkata");
//include_once 'D:/xampp/htdocs/vtlapp/process/dao.php';

 include_once '/opt/lampp/htdocs/sks/admin/process/dao.php';

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