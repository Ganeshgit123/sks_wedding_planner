<?php

define('DB_HOST','localhost');
define('DB_USER','u788846685_sks_admin_user');
define('DB_PASS','f~8G;7hoc@N3');
define('DB_NAME','u788846685_sks_admin');
 
date_default_timezone_set("Asia/kolkata");

 include_once '../process/dao.php';

$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
// echo "connection".$conn ;
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  // echo date('d-m-y h:i:s A');
  wh_log(date('d-m-y h:i:s A')." ".mysqli_connect_error());
  exit();
} 
//$conn = @mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);